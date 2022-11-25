<!DOCTYPE html>
<html lang="en">
<style>
    h6 {
        background-color: #48962D;
        color: #48962D;
        width: 100%;
        height: 90px;
        margin-top: -20px;
        /* margin-left: -10px; */
    }

    #k-harta {
        color: black;
        font-family: 'IBM Plex Serif';
        background-color: #65CA42;
        margin: 55px 900px 0 100px;
        font-size: 40px;
        font-weight: 700;
        text-align: center;
        border-radius: 5px;
        padding-bottom: 20px;
        padding-top: 20px;
        width: 542px;
        height: 132px;
    }

    .fw-bold {
        font-family: 'IBM Plex Serif';
        font-weight: lighter;
        font-size: 21px;
        margin-bottom: 25px;
    }

    #langkah-1 {
        font-family: 'IBM Plex Serif';
        font-weight: 700;
    }

    #m-langkah1 {
        font-family: 'IBM Plex Serif';
        font-size: 20px;
    }

    #content-1 {
        padding-bottom: 2px;
        padding-top: 15px;
        font-family: 'IBM Plex Serif';
        font-weight: 700;
    }

    #content-2 {
        background-color: #83FF57;
    }

    #content-3 {
        font-family: 'IBM Plex Serif';
    }

    a {
        text-decoration: none;
        display: inline-block;
        padding: 8px 16px;
    }

    .previous {
        background-color: #aaa9a9;
        color: black;
    }

    .next {
        background-color: #20ad4b;
        color: white;
    }

    .round {
        border-radius: 50%;
    }

    .footer-content {
        width: 100%;
        height: 400px;
        background: #aaa9a9;
    }
</style>

<head>
    <meta charset="UTF-8">
    <title>Kalkulator Harta Warisan</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="icon" href="img/name.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <h6>i</h6>
    <a href="rumus.html" class="previous round">&#8249;</a>

    <?php
    $total = 0;
    $warisan = 0;

    if (isset($_POST["submit"])) {
        $total = (int)$_POST["tot_harta_warisan"] - (int)$_POST["hutang_berkaitan"] - (int)$_POST["biaya_penyelenggara"];
        // $anak_laki = $total != '' ? ($total / (int)$_POST["anak_laki"]) : 0;


        // jika ada anak laki dan perempuan maka si laki mendapatkan harta warisan 2x > dari perempuan
        if (!empty($_POST["anak_laki"] && $_POST["anak_perempuan"])) {
            $anak_laki = $total * 2 / 3;
            $anak_perempuan = ($total - $anak_laki);
        } else {
            if ($_POST["anak_laki"] == 1) {
                $anak_laki = $total; //dapet sisa dari total
            } elseif ($_POST["anak_laki"] > 1) {
                $anak_laki = $total * 2 / 3;
            } else {
                $anak_laki = 0;
            }

            if ($_POST["anak_perempuan"] == 1) {
                $anak_perempuan = ($total / 2);
            } elseif ($_POST["anak_perempuan"] > 1) {
                $anak_perempuan = ($total * 2 / 3);
            } else {
                $anak_perempuan = 0;
            }
        }


        // gk dapet harta kalo si yg meninggal punya anak laki2
        if (empty($_POST["anak_laki"])) {
            if ($_POST["cucu_laki"] == 1) {
                $cucu_laki = ($total * 1 / 6);
            } elseif ($_POST["cucu_laki"] > 1) {
                $cucu_laki = ($total * 2 / 3);
            } else {
                $cucu_laki = 0;
            }
        } else {
            $cucu_laki = 0;
        }

        // gk dapet harta kalo si yg meninggal punya anak laki2
        if ($_POST["cucu_perempuan"] == 1) {
            $cucu_perempuan = ($total * 1 / 2);
        } elseif ($_POST["cucu_perempuan"] > 1) {
            $cucu_perempuan = ($total * 2 / 3);
        } else {
            $cucu_perempuan = 0;
        }

        if (!empty($_POST["ayah"])) {
            $ayah = $total * 1 / 6;
        } else {
            $ayah = 0;
        }

        if (!empty($_POST["ibu"])) {
            $ibu = $total * 1 / 6;
        } else {
            $ibu = 0;
        }

        if (!empty($_POST["suami"])) {
            $suami = $total * 1 / 2;
        } else {
            $suami = 0;
        }

        // kalo dia punya anak laki atau cwek dia dapetnya 1/8
        if (!empty($_POST["istri"])) {
            $istri = $total * 1 / 4;
        } else {
            $istri = 0;
        }

        if (!empty($_POST["kakek"])) {
            $kakek = $total * 1 / 6;
        } else {
            $kakek = 0;
        }

        // tidak dapat harta kalo ada ibu
        if (!empty($_POST["ibu_dari_bapak"] && $_POST["ibu_dari_ibu"] && $_POST["ibu_dari_kakek"])) {
            $ibu_dari_bapak = $total * 1 / 6;
            $ibu_dari_ibu = $total * 1 / 6;
            $ibu_dari_kakek = $total * 1 / 6;
        } else {
            $ibu_dari_bapak = 0;
            $ibu_dari_ibu = 0;
            $ibu_dari_kakek = 0;
        }

        //gk dapet kalo ada anak laki sama bapak
        if (!empty($_POST["saudara_kandung"] && $_POST["saudari_kandung"])) {
            $saudara_kandung = $total * 1 / 2;
            $saudari_kandung = $total * 1 / 2;
        } else {
            $saudara_kandung = 0;
            $saudari_kandung = 0;
        }

        //gk dapet kalo ada anak laki sama bapak
        if (!empty($_POST["saudara_sebapak"] && $_POST["saudari_sebapak"])) {
            $saudara_sebapak = $total * 1 / 2;
            $saudari_sebapak = $total * 1 / 2;
        } else {
            $saudara_sebapak = 0;
            $saudari_sebapak = 0;
        }

        //gk dapet kalo ada anak laki sama bapak
        if (!empty($_POST["saudara_seibu"] && $_POST["saudari_seibu"])) {
            $saudara_seibu = $total * 1 / 6;
            $saudari_seibu = $total * 1 / 6;
        } else {
            $saudara_seibu = 0;
            $saudari_seibu = 0;
        }

        //gk dapet kalo ada anak laki sama bapak
        if (!empty($_POST["putra_dari_saudara_sekandung"])) {
            $putra_dari_saudara_sekandung = $total * 1 / 2;
        } else {
            $putra_dari_saudara_sekandung = 0;
        }

        //gk dapet kalo ada anak laki sama bapak
        if (!empty($_POST["putra_dari_saudari_sebapak"])) {
            $putra_dari_saudari_sebapak = $total * 1 / 3;
        } else {
            $putra_dari_saudari_sebapak = 0;
        }
    } else {
        $total = 0;
        $anak_laki = 0;
        $anak_perempuan = 0;
        $cucu_laki = 0;
        $cucu_perempuan = 0;
        $ayah = 0;
        $ibu = 0;
        $suami = 0;
        $istri = 0;
        $kakek = 0;
        $ibu_dari_bapak = 0;
        $ibu_dari_ibu = 0;
        $ibu_dari_kakek = 0;
        $saudara_kandung = 0;
        $saudari_kandung = 0;
        $saudara_sebapak = 0;
        $saudari_sebapak = 0;
        $saudara_seibu = 0;
        $saudari_seibu = 0;
        $putra_dari_saudara_sekandung = 0;
        $putra_dari_saudari_sebapak = 0;
    }

    // var_dump($total);
    ?>
    <form action="" method="POST">
        <h2 id="k-harta">Kalkulator Harta </br> Warisan</h2>
        <div class="container pt-2 pb-3">
            <h5 id="content-1">Berikut merupakan Langkah dan Kalkulator</br>
                untuk menghitung harta warisan yang dapat</br>
                dibagian pada calon ahli waris</h5><br>
            <!-- <p>-----------------------</p> -->
            <h5 id="content-1">Langkah 1 : Menghitung Total Harta</h5>
            <p>Langkah pertama untuk membagi harta warisan</br>
                ialah menghitung jumlah total harta yang dimiliki</br>
                oleh si mayit</br>
            <div class="form-group col-2">
                <label>Total Harta Warisan :</label>
                <input id="content-2" type="text" class="form-control" onkeydown="numberWithCommas(this)" name="tot_harta_warisan" placeholder="0">
            </div>
        </div>

        <div class="container pt-2 pb-3">
            <h5 id="content-1">Langkah 2 : Menghitung hak-hak </h5>
            <p>Langkah selanjutnya yaitu menentukan hak-hak</br>    
                yang harus dipenuhi yaitu membayar hutang yang</br>
                berkaitan dengan harta warisan (bila mempunyai</br>
                hutang), dan juga menghitung biaya pengurusan</br>
                jenazah</br>
            <div class="row">
                <div class="form-group col-3">
                    <label>Hutang yang Berkaitan :</label>
                    <input id="content-2" type="text" class="form-control" onkeydown="numberWithCommas(this)" name="hutang_berkaitan" placeholder="0">
                </div>
                <div class="form-group col-3">
                    <label>Biaya penyelenggaraan jenazah :</label>
                    <input id="content-2" type="text" class="form-control" onkeydown="numberWithCommas(this)" name="biaya_penyelenggara" placeholder="0">
                </div>
            </div>
        </div>

        <div class="container pt-3 pb-1">
            <h5 id="content-1">Langkah 3 : Masukkan Ahli Waris</h5>
            <p>Langkah ketiga yaitu memasukkan ahli waris</br>
                yang ditinggalkan si mayit</p>

            <div class="container">
                <div class="row">
                    <div class="form-group col">
                        <label>1. Anak Laki-Laki</label>
                        <input id="content-2" type="text" class="form-control" name="anak_laki" placeholder="0">
                    </div>
                    <div class="form-group col">
                        <label>2. Anak Perempuan</label>
                        <input id="content-2" type="text" class="form-control" name="anak_perempuan" placeholder="0">
                    </div>
                    <div class="form-group col">
                        <label>3. Cucu laki-laki dari anak laki-laki</label>
                        <input id="content-2" type="text" class="form-control" name="cucu_laki" placeholder="0">
                    </div>
                    <div class="form-group col">
                        <label>4. Cucu perempuan dari anak laki-laki</label>
                        <input id="content-2" type="text" class="form-control" name="cucu_perempuan" placeholder="0">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col">
                        <label>5. Ayah</label>
                        <input id="content-2" type="text" class="form-control" name="ayah" placeholder="0">
                    </div>
                    <div class="form-group col">
                        <label>6. Ibu</label>
                        <input id="content-2" type="text" class="form-control" name="ibu" placeholder="0">
                    </div>
                    <div class="form-group col">
                        <label>7. Suami</label>
                        <input id="content-2" type="text" class="form-control" name="suami" placeholder="0">
                    </div>
                    <div class="form-group col">
                        <label>8.Istri</label>
                        <input id="content-2" type="text" class="form-control" name="istri" placeholder="0">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col">
                        <label>9. Kakek</label>
                        <input id="content-2" type="text" class="form-control" name="kakek" placeholder="0">
                    </div>
                    <div class="form-group col">
                        <label>10. Nenek (Ibu dari Bapak)</label>
                        <input id="content-2" type="text" class="form-control" name="ibu_dari_bapak" placeholder="0">
                    </div>
                    <div class="form-group col">
                        <label>11. Nenek (Ibu dari Ibu)</label>
                        <input id="content-2" type="text" class="form-control" name="ibu_dari_ibu" placeholder="0">
                    </div>
                    <div class="form-group col">
                        <label>12. Nenek (Ibu dari Kakek)</label>
                        <input id="content-2" type="text" class="form-control" name="ibu_dari_kakek" placeholder="0">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label>13. Saudara Kandung</label>
                        <input id="content-2" type="text" class="form-control" name="saudara_kandung" placeholder="0">
                    </div>
                    <div class="form-group col">
                        <label>14. Saudari Kandung</label>
                        <input id="content-2" type="text" class="form-control" name="saudari_kandung" placeholder="0">
                    </div>
                    <div class="form-group col">
                        <label>15. Saudara Sebapak</label>
                        <input id="content-2" type="text" class="form-control" name="saudara_sebapak" placeholder="0">
                    </div>
                    <div class="form-group col">
                        <label>16. Saudari Sebapak</label>
                        <input id="content-2" type="text" class="form-control" name="saudari_sebapak" placeholder="0">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col">
                        <label>17. Saudara Seibu</label>
                        <input id="content-2" type="text" class="form-control" name="saudara_seibu" placeholder="0">
                    </div>
                    <div class="form-group col">
                        <label>18. Saudari Seibu</label>
                        <input id="content-2" type="text" class="form-control" name="saudari_seibu" placeholder="0">
                    </div>
                    <div class="form-group col">
                        <label>19. Putra dari Saudara Sekandung</label>
                        <input id="content-2" type="text" class="form-control" name="putra_dari_saudara_sekandung" placeholder="0">
                    </div>
                    <div class="form-group col">
                        <label>20. Putra dari Saudari Sebapak</label>
                        <input id="content-2" type="text" class="form-control" name="putra_dari_saudari_sebapak" placeholder="0">
                    </div>
                    <div class="form-group"><br>
                        <button type="submit" id="hitung" name="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>

                <tr>
                    <td>Harta yang siap dibagikan = Rp. </td>

                    <?php echo number_format($total, 2, ',', '.'); ?><br>
                    Jatah untuk ....</td><br>
                    <?php echo "Anak Laki-Laki = Rp. " . number_format($anak_laki, 2, ',', '.'); ?></td><br>
                    <?php echo "Anak Perempuan = Rp.  " . number_format($anak_perempuan, 2, ',', '.'); ?></td><br>
                    <?php echo "Cucu laki-laki dari anak laki-laki = Rp.  " . number_format($cucu_laki, 2, ',', '.'); ?></td><br>
                    <?php echo "Cucu perempuan dari anak laki-laki = Rp. "  . number_format($cucu_perempuan, 2, ',', '.'); ?></td><br>
                    <?php echo "Ayah = Rp. " . number_format($ayah, 2, ',', '.'); ?></td><br>
                    <?php echo "Ibu = Rp. " . number_format($ibu, 2, ',', '.'); ?></td><br>
                    <?php echo "Suami = Rp. " . number_format($suami, 2, ',', '.'); ?></td><br>
                    <?php echo "Istri = Rp. " . number_format($istri, 2, ',', '.'); ?></td><br>
                    <?php echo "Kakek = Rp. " . number_format($kakek, 2, ',', '.'); ?></td>
                    <?php echo "Nenek (Ibu dari Bapak) = Rp. " . number_format($ibu_dari_bapak, 2, ',', '.'); ?></td><br>
                    <?php echo "Nenek (Ibu dari ibu) = Rp. " . number_format($ibu_dari_ibu, 2, ',', '.'); ?></td><br>
                    <?php echo "Nenek (Ibu dari kakek) = Rp. " . number_format($ibu_dari_kakek, 2, ',', '.'); ?></td><br>
                    <?php echo "Saudara Kandung = Rp. " . number_format($saudara_kandung, 2, ',', '.'); ?></td><br>
                    <?php echo "Saudari Kandung = Rp. " . number_format($saudari_kandung, 2, ',', '.'); ?></td><br>
                    <?php echo "Saudara Sebapak = Rp. " . number_format($saudara_sebapak, 2, ',', '.'); ?></td><br>
                    <?php echo "Saudari Sebapak = Rp. " . number_format($saudari_sebapak, 2, ',', '.'); ?></td><br>
                    <?php echo "Saudara Seibu = Rp. " . number_format($saudara_seibu, 2, ',', '.'); ?></td><br>
                    <?php echo "Saudari Seibu = Rp. " . number_format($saudari_seibu, 2, ',', '.'); ?></td><br>
                    <?php echo "Putra dari Saudara Sekandung = Rp. " . number_format($putra_dari_saudara_sekandung, 2, ',', '.'); ?></td><br>
                    <?php echo "Putra dari Saudari Sebapak = " . number_format($putra_dari_saudari_sebapak, 2, ',', '.'); ?></td><br>
                    </td>
                </tr><br><br><br><br>
                <tr>
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
    </script>
</body>
</body>

</html>