<?php

namespace App\Exports;

use App\Models\RakBuku;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportRakBuku implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RakBuku::all();
    }
    public function map($rakbuku):array{
        return [
            $rakbuku->id,
            $rakbuku->buku->judul,
            $rakbuku->jenisbuku->jenis,
            $rakbuku->buku->tahun_terbit,
        ];
    }
    public function headings():array{
        return [
            'id',
            'Judul Buku',
            'Jenis Buku',
            'Tahun Terbit'
        ];
    }
}
