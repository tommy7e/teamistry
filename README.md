Tutorial untuk pengguna dalam memanipulasi dan menggunakan teamistry

1. Konfigurasi Repository: silahkan download ZIP pada repository ini dan buat pada repository/folder local yang diinginkan. File yang dibutuhkan adalah semua kecuali folder src.
2. Inisiasi framework laravel: Buka repository dengan menggunakan vscode dan buka terminal. Jalankan command composer create-project --prefer-dist laravel/laravel:^9.0 src. Command tersebut akan menciptakan laravel versi 9. Maka dalam repositori tersebut akan terbentuk repository bernama src yang berisikan seluruh file laravel.
3. Connect remote dengan github teamistry: lakukan git init untuk menginisialisasi repository dengan git. Git remote add origin https://github.com/tommy7e/teamistry.git. Git fetch --all. Dan git reset --hard origin/master
4. Lakukan editing yang diinginkan
5. Lakukan git add .; git commit -m "komentar"; git push: Pada perubahan yang telah anda buat di repositori lokal, Lakukan push untuk memperbaharui repository pada branch master github.
6. Google cloud akan melakukan revisi dalam waktu: 1 min 30 detik: Setelah ada perubahan pada repository github, service pada Google Cloud Run akan otomatis melakukan revision: membuat ulang image dan mendeploynya image tersebut. Waktu yang dibutuhkan sampai revision tersebut siap diakses adalah sekitar 1 menit 30 detik setelah git push dilakukan. Pastikan Dockerfile ada karena proses integrasi terjadi antara service Google CLoud Run dengan Dockerfile yang ada pada github. Jika sudah selesai, maka akan terbentuk revision terbaru seperti gambar dibawah ini: ![image](https://github.com/tommy7e/teamistry/assets/147222093/515e82ed-6c27-4946-b025-995a121f3f71)
8. Melihat website pada cloud: Pergi pada link https://teamistry-ir6oijtnxq-uc.a.run.app/ untuk melihat web tersebut sudah terlaunch via Google Cloud Run service. Pergi juga ke link https://teamistry-ir6oijtnxq-uc.a.run.app/(route-yang-dituju) untuk pergi pada page di route lainnya
   

    
