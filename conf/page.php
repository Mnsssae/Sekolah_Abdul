<?php
switch($_GET['page']){
      // siswa
      case "get_siswa":
          include "siswa/tampil.php";
          break;
          case "add_siswa":
            include "siswa/tambah.php";
            break;
            case "edit_siswa":
              include "siswa/edit.php";
              break;
              case "del_siswa":
                include "siswa/hapus.php";
                break;
                // matpel
                case "get_matpel":
                  include "matpel/tampil.php";
                  break;
                  case "add_matpel":
                    include "matpel/tambah.php";
                    break;
                    case "edit_matpel":
                    include "matpel/edit.php";
                    break;
                    case "del_matpel":
                      include "matpel/hapus.php";
                      break;
                      //jurusan
                      case "get_jurusan":
                        include "jurusan/tampil.php";
                        break;
                        case "add_jurusan":
                          include "jurusan/tambah.php";
                          break;
                          case "edit_jurusan":
                          include "jurusan/edit.php";
                          break;
                          case "del_jurusan":
                            include "jurusan/hapus.php";
                            break;
                            //guru
                            case "get_guru":
                              include "guru/tampil.php";
                              break;
                              case "add_guru":
                                include "guru/tambah.php";
                                break;
                                case "edit_guru":
                                include "guru/edit.php";
                                break;
                                case "del_guru":
                                  include "guru/hapus.php";
                                  break;
                                  //kelas
                                  case "get_kelas":
                                    include "kelas/tampil.php";
                                    break;
                                    case "add_kelas":
                                      include "kelas/tambah.php";
                                      break;
                                      case "edit_kelas":
                                      include "kelas/edit.php";
                                      break;
                                      case "del_kelas":
                                        include "kelas/hapus.php";
                                        break;
                                        //home
                                        case "home":
                                          include "dashboard/statistik.php";
                                          break;
                                          //jadwal
                                          case "get_jadwal":
                                            include "jadwal/tampil.php";
                                            break;
                                            case "add_jadwal":
                                              include "jadwal/tambah.php";
                                              break;
                                              case "edit_jadwal":
                                              include "jadwal/edit.php";
                                              break;
                                              case "del_jadwal":
                                                include "jadwal/hapus.php";
                                                break;
                                                //transaksi guru
                                                case "get_jguru":
                                                  include "transaksi/jadwal.php";
                                                  break;
                                                  case "get_absen":
                                                    include "transaksi/absen.php";
                                                    break;
                                                    case "get_rguru":
                                                      include "transaksi/laporan.php";
                                                      break;
                                                      //Tambahan 9 Nov 2022
                                                      case "isi_absen":
                                                        include "transaksi/isi_absen.php";
                                                        break;
                                                
  }
  ?>