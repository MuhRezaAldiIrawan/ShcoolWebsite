<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Kegiatan';
        $listpost = DB::table('kegiatans')->latest()->get();

        return view('admin.post.post', ['listpost' => $listpost], compact('title'));
    }

    public function addpost(Request $request)
    {
        $title = 'Post Kegiatan';

        return view('admin.post.addpost', compact('title'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'body' => 'required',
            'images' => 'image|file',
            'tanggal_kegiatan' => 'required',
            'status' => 'required'

        ]);

        if ($request->file('images')) {
            $validatedData['images'] = $request->file('images')->store('Post-images');
        }

        Kegiatan::create($validatedData);

        Alert::success('Success', 'Post Kegiatan telah berhasil di tambahkan');
        return redirect('/dashboard');
    }

    public function detailpost($id)
    {
        $title = 'Detail Kegiatan';
        $detailpost = DB::table('kegiatans')->where('id', $id)->get();

        return view('admin.post.detail', ['detailpost' => $detailpost], compact('title'));
    }

    public function editpost($id)
    {
        $title = 'Edit Post';
        $editpost = DB::table('kegiatans')->where('id', $id)->get();

        return view('admin.post.editpost', ['editpost' => $editpost], compact('title'));
    }

    // public function updatepost(Request $request)
    // {
    //     // dd($request);
    //     $updatepost = $request->validate([
    //         'judul' => 'required',
    //         'kategori' => 'required',
    //         'body' => 'required',
    //         'images' => 'image|file',
    //         'tanggal_kegiatan' => 'required',
    //     ]);

    //     if ($request->file('images')) {
    //         $validatedData['images'] = $request->file('images')->store('Post-images');
    //     }

    //     Kegiatan::where('id', $request->id)->update($updatepost);

    //     return redirect('/dashboard');
    // }

    // public function updatepost(Request $request)
    // {

    //     DB::table('kegiatans')->where('id', $request->id)->update([
    //         'judul' => $request->judul,
    //         'kategori' => $request->kategori,
    //         'body' => $request->body,
    //         'images' => $request->images,
    //         'tanggal_kegiatan' => $request->tanggal_kegiatan,
    //     ]);

    //     if ($request->file('images')) {
    //         $request['images'] = $request->file('images')->store('Post-images');
    //     }

    //     return redirect('/dashboard');
    // }

    // Ganti dengan nama model yang sesuai

    public function updatepost(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string',
            'kategori' => 'required|string',
            'body' => 'required|string',
            'tanggal_kegiatan' => 'required|date',
            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required',
        ]);

        $kegiatan = Kegiatan::find($request->id);

        if (!$kegiatan) {
            return redirect()->back()->with('error', 'Data kegiatan tidak ditemukan.');
        }

        // Update data kegiatan dengan data baru dari request
        $kegiatan->judul = $validatedData['judul'];
        $kegiatan->kategori = $validatedData['kategori'];
        $kegiatan->body = $validatedData['body'];
        $kegiatan->tanggal_kegiatan = $validatedData['tanggal_kegiatan'];
        $kegiatan->status = $validatedData['status'];

        // Periksa apakah ada gambar baru yang diunggah
        if ($request->hasFile('images')) {
            // Hapus gambar lama jika ada
            Storage::delete($kegiatan->images);

            // Simpan gambar baru ke direktori penyimpanan default
            $kegiatan->images = $request->file('images')->store('');
        }

        // Simpan perubahan ke database menggunakan Eloquent Model
        $kegiatan->save();

        Alert::success('Success', 'Data berhasil di Update');
        return redirect('/post')->with('success', 'Data kegiatan berhasil diupdate.');
    }

    public function deletepost($id)
    {
        DB::table('kegiatans')->where('id', $id)->delete();

        Alert::success('Success', 'Data Kegiatan Telah berhasil dihapus');
        return redirect('/post');
    }
}
