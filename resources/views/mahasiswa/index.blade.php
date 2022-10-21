<?php
    use App\Models\mahasiswa;
    use App\Models\vjlhmhskrs;
    use App\Models\vmatakuliahsks_mhs;
?>
@extends('layouts.app')

@section('content')
    <style>
        table tr{
            padding: 10px;
        }
    </style>
    <table style="padding: 10px;">
        <tr>
            <!--<th>No</th>-->
            <th>No</th>
            <th>Kode Matakuliah</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
        </tr>
        <?php
    

        $rows = \DB::select('select no, kode_matakuliah, nama_matakuliah, sks from matakuliah');
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>".$row->no."</td>";
            echo "<td>".$row->kode_matakuliah."</td>";
            echo "<td>".$row->nama_matakuliah."</td>";
            echo "<td>".$row->sks."</td>";
            echo "</tr>";
        }
        ?>
    </table>
@endsection