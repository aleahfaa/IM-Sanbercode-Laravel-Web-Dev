<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Judul Buku</label>
            <input type="text" name="title" id="title" placeholder="Masukkan judul buku" required>
        </div>
        <div>
            <label for="description">Deskripsi Buku</label>
            <textarea name="description" id="description" placeholder="Masukkan deskripsi buku" required></textarea>
        </div>
        <div>
            <label for="image">Gambar Buku</label>
            <input type="file" name="image" id="image" accept="image/*">
        </div>
        <div>
            <label for="genre_id">Pilih Genre</label>
            <select name="genre_id" id="genre_id" required>
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Tambah Buku</button>
    </form>
</body>
</html>
