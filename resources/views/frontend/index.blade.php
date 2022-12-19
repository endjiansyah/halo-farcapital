<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('add') }}">Tambah Pengguna</a>
    <table class="table" border="5">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="tabel-pengguna">

        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"
        integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
    <script>
        $.ajax({
            url: "http://localhost:8000/api/pengguna",
            method: "GET",
            dataType: "json",
            success: response => {
                let listPengguna = response.data
                let htmlString = ""
                for (let pengguna of listPengguna) {
                    htmlString += `
                         <tr>
                            <td>${pengguna.name}</td>
                            <td>${pengguna.email}</td>
                            <td>
                                <a href="http://localhost:8000/detail/${pengguna.id}">Detail</a>
                                <button onclick="deletePengguna(${pengguna.id})">Hapus</button>
                            </td>
                            </tr>
                            `
                }
                html = $.parseHTML(htmlString)
                $("#tabel-pengguna").append(html)
            }
        })

        function deletePengguna(id) {
            $.ajax({
                url: `http://localhost:8000/api/pengguna/${id}/delete`,
                method: "POST",
                dataType: "json",
                success: _ => {
                    console.log("SUCCESS")
                    window.location.href = ""
                }
            })
        }
    </script>
</body>

</html>
