@extends('utama')

@section('judul_menu')
    ini ditampilan dari section judul menu: {{ $isi_data}}

    @php

    @endphp

    @if($isi_data == 1)
        data diisi angka 1
    @elseif($isi_data > 1)
        data diisi lebih dari 1
    @else
        Tidak valid
    @endlf
    
        
    @endphp
@endsection

@section('isi_menu')
    isi dari section isi menu
@endsection