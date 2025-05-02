<h1 align="center">Data Tugas</h1>
<h3 align="center">Tanggal : {{ $tanggal }}</h3>
<h3 align="center">Waktu : {{ $jam }}</h3>
<hr>
<table width="100%">   
    <tbody>
        <tr>
            <th>Nama</th>
            <th>:</th>
            <th>{{ $tugas->user->nama }}</th>
        </tr>
        <tr>
            <th>Email</th>
            <th>:</th>
            <th>{{ $tugas->user->email }}</th>
        </tr>
        <tr>
            <th>Tugas</th>
            <th>:</th>
            <th>{{ $tugas->tugas }}</th>
        </tr>
        <tr>
            <th>Tanggal Mulai</th>
            <th>:</th>
            <th>{{ $tugas->tanggal_mulai }}</th>
        </tr>
        <tr>
            <th>Tanggal Selesai</th>
            <th>:</th>
            <th>{{ $tugas->tanggal_selesai }}</th>
        </tr>
    </tbody>
</table>
<hr>