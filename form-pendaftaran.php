<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran Siswa Malaka</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>Form Pendaftaran Siswa Malaka</h2>
    <form action="simpan-pendaftaran.php" method="post">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" class="form-control" placeholder="Masukan Username" />
        </div>
		<div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
        </div>
		<div class="form-group">
			<label>Nis:</label>
			<textarea name="nis" class="form-control" rows="5"placeholder="Masukan Nis" ></textarea>
		</div> 
		<div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Masukan Email" />
        </div>
		<div class="form-group">
            <label>Kelas:</label>
            <input type="text" name="kelas" class="form-control" placeholder="Masukan Kelas" />
        </div>
		<div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Masukan Password" />
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
</body>
</html>