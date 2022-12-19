<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="">
        <label for="name">Nama</label>
        <input type="text" id="name">

        <label for="email">Email</label>
        <input type="email" id="email">

        <label for="password">Password</label>
        <input type="password" id="password">

        <button onclick="add()">Submit</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.2.min.js"
        integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>

    <script>
        $.ajax({
            url: "http://localhost:8000/api/pengguna/{{ $id }}",
            method: "GET",
            success: response => {
                let pengguna = response.data
                $("#name").val(pengguna.name)
                $("#email").val(pengguna.email)
            }
        })

        function add() {
            let name = $("#name").val()
            let email = $("#email").val()
            let password = $("#password").val()

            if (name === "") return alert("Namanya kok kosong?")
            if (email === "") return alert("Emailnya mana?")

            let fd = new FormData();
            fd.append("name", name)
            fd.append("email", email)

            if (password !== "") fd.append("password", password)


            $.ajax({
                url: "http://localhost:8000/api/pengguna/{{ $id }}/edit",
                method: "POST",
                data: fd,
                processData: false,
                contentType: false,
                success: _ => {
                    window.location.href = "http://localhost:8000"
                }
            })
        }
    </script>
</body>

</html>
