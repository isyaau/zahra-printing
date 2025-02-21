<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/output.css">
    <title>Halaman Registrasi</title>
</head>

<body>
    <div class="flex py-10 md:py-20 px-5 md:px-32 bg-gray-200 min-h-screen">
        <div class="flex shadow w-full flex-col-reverse lg:flex-row">
            <div class="w-full lg:w-1/2 bg-white p-10 px-5 md:px-20">
                <h1 class="font-bold text-xl text-gray-700">Halaman Registrasi</h1>
                <p class="text-gray-600">Silakan isi semua kolom untuk membuat akun Anda!</p>
                <br>
                @if (Session::has('errors'))
                    <ul>
                        @foreach (Session::get('errors') as $error)
                            <li style="color: red">{{ $error[0] }}</li>
                        @endforeach
                    </ul>
                @endif

                <form action="/register_member" class="mt-10" method="POST">
                    @csrf
                    <div class="my-3">
                        <label class="font-semibold" for="nama_member">Nama Member</label>
                        <input required type="text" placeholder="Nama Member" name="nama_member" id="nama_member"
                            class="block border-2 rounded-full mt-2 py-2 px-5 w-full">
                    </div>
                    <div class="my-3">
                        <label class="font-semibold" for="no_hp">No Hp</label>
                        <input required type="text" placeholder="No Hp" name="no_hp" id="no_hp"
                            class="block border-2 rounded-full mt-2 py-2 px-5 w-full">
                    </div>
                    <div class="my-3">
                        <label class="font-semibold" for="email">E-mail</label>
                        <input required type="text" placeholder="yourmail@example.com" name="email" id="email"
                            class="block border-2 rounded-full mt-2 py-2 px-5 w-full">
                    </div>
                    <div class="my-3">
                        <label class="font-semibold" for="password">Kata Sandi</label>
                        <input required type="password" placeholder="kata sandi" name="password" id="password"
                            class="block border-2 rounded-full mt-2 py-2 px-5 w-full">
                    </div>
                    <div class="my-3">
                        <label class="font-semibold" for="konfirmasi_password">Konfirmasi Kata Sandi</label>
                        <input required type="password" placeholder="Konfirmasi Kata Sandi" name="konfirmasi_password"
                            id="konfirmasi_password" class="block border-2 rounded-full mt-2 py-2 px-5 w-full">
                    </div>
                    <div class="my-5">
                        <button type="submit"
                            class="w-full rounded-full bg-blue-400 hover:bg-blue-600 text-white py-2">REGISTER</button>
                    </div>
                </form>
                <span>Sudah punya akun? <a href="/login_member" class="text-blue-400 hover:text-blue-600">Login
                        di sini.</a></span>
            </div>
            <div style="background-color: black" class="w-full lg:w-1/2 bg-black-400 flex justify-center items-center">
                <img src="/assets/register1.png" alt="Gambar Registrasi" class="w-full">
            </div>
        </div>
    </div>
    <script src="/sbadmin2/vendor/jquery/jquery.min.js"></script>
</body>

</html>
