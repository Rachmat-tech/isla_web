<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AlumniAward;
use App\Models\BeritaKelautan;
use App\Models\CalonAnggota;
use App\Models\CeritaAlumni;
use App\Models\Contact;
use App\Models\Document;
use App\Models\GaleriIsla;
use App\Models\Loker;
use App\Models\Nasional;
use App\Models\Opini;
use App\Models\PengurusWilayah;
use App\Models\Pimpinan;
use App\Models\Regional;
use App\Models\StrukturMpo;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'beritas' => BeritaKelautan::orderBy('judul')->paginate(4),
            'ceritaAlumnis' => CeritaAlumni::orderBy('created_at')->get(),
            'lokers' => Loker::orderBy('id')->paginate(3),
        ];
        return view('user/index', $data);
    }
    public function berita()
    {
        $data = [
            'beritas' => BeritaKelautan::orderBy('judul')->get(),
        ];

        return view('user.berita', $data);
    }
    public function pimpinan()
    {
        $data = [
            'pimpinans' => Pimpinan::orderBy('id')->get(),
        ];

        return view('user.pimpinan', $data);
    }
    public function mpo()
    {
        $data = [
            'mpos' => StrukturMpo::orderBy('id')->get(),
        ];

        return view('user.mpo', $data);
    }
    public function organisasi()
    {
        $data = [
            'organisasis' => StrukturOrganisasi::orderBy('id')->get(),
        ];

        return view('user.organisasi', $data);
    }
    public function wilayah()
    {
        $data = [
            'wilayas' => PengurusWilayah::orderBy('id')->get(),
        ];

        return view('user.wilayah', $data);
    }
    public function tentang()
    {
        return view('user.tentang');
    }
    public function alumni()
    {
        $data = [
            'alumnis' => AlumniAward::orderBy('id')->get(),
        ];

        return view('user.alumni', $data);
    }
    public function contact()
    {
        $data = [
            'contacts' => Contact::orderBy('id')->get(),
        ];

        return view('user.contact', $data);
    }
    public function document()
    {
        $data = [
            'documents' => Document::orderBy('id')->get(),
        ];

        return view('user.document', $data);
    }
    public function formulir()
    {
        return view('user.formulir');
    }
    public function galeri()
    {
        $data = [
            'galeris' => GaleriIsla::orderBy('id')->get(),
        ];

        return view('user.galeri', $data);
    }
    public function opini()
    {
        $data = [
            'opinis' => Opini::orderBy('id')->get(),
        ];

        return view('user.opini', $data);
    }
    public function prokerNasional()
    {
        $data = [
            'prokerNasionals' => Nasional::orderBy('id')->get(),
        ];

        return view('user.proker-nasional', $data);
    }
    public function prokerRegional()
    {
        $data = [
            'prokerRegionals' => Regional::orderBy('id')->get(),
        ];

        return view('user.proker-regional', $data);
    }
    public function loker()
    {
        $data = [
            'lokers' => Loker::orderBy('id')->get(),
        ];

        return view('user.loker', $data);
    }
    public function lokerDetail()
    {
        $data = [
            'lokerDetails' => Loker::orderBy('id')->get(),
        ];

        return view('user.loker-detail', $data);
    }
    public function pendaftaran(Request $request)
    {
        $pendaftar = CalonAnggota::create(
            [
                'nama' => $request->name,
                'ttl' => $request->tempat_lahir.', '.Carbon\Carbon::parse($request->tanggal_lahir)->isoFormat('DD MMMM Y'),
                'angkatan' => $request->angkatan,
                'tahun_lulus' => $request->tahun_lulus,
                'no_hp' => $request->phone_number,
            ]
        );

        return redirect()->back();
    }
}