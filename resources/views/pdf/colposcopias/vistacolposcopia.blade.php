<html html>

<head>
    <title>Vista de Colposcopia</title>
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: arial, sans-serif;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            font-size: 10px;
            border: 1px solid #000;
        }

        th,
        td {
            width: 25%;
            text-align: left;
            vertical-align: top;
            border: 1px solid #000;
            border-collapse: collapse;
            padding: 0.3em;
            caption-side: bottom;
            height: 20px;
        }

        th {
            background-color: #595555;
            color: white;
            font-size: 10px;
            width: 100%;
        }

        img {}
    </style>
</head>

<body>
    @if ($imagen != null)
        <center>
            <img align="center" src="{{ $imagen }}" alt="" height="100">
        </center>
    @endif

    <h4 align="center">
        <strong><u>Colposcopia</u></strong>
    </h4>
    <h6>
        <?php
        $fecha = date('d-m-Y', strtotime($colposcopia->fecha));
        ?>
        <strong>Fecha:</strong>
        <font color="Blue"> <strong>{{ $fecha }} </strong></font>
        <br><strong>Doctor:</strong>
        <font color="Blue"> <strong>{{ $colposcopia->Paciente }}<strong></font>
        <br><strong>Paciente:</strong>
        <font color="Blue"> <strong>{{ $colposcopia->Doctor }} ({{ $colposcopia->especialidad }})<strong></font>

    </h6>
    <div style="text-align:center;">
        <table>
            <tr>
                <th colspan="2">
                    <h4 align="center">Paciente: <b> {{ $paciente->nombre }}</b></h4>
                </th>
            </tr>
            <tr>
                <td>
                    <p align="right"><strong>F.Nacimiento / Edad:</strong></p>
                </td>
                <?php
                $fecha_nacimiento = date('d-m-Y', strtotime($paciente->fecha_nacimiento));
                
                $cumpleanos = new DateTime($paciente->fecha_nacimiento);
                $hoy = new DateTime();
                $annos = $hoy->diff($cumpleanos);
                $edad = $annos->y;
                ?>
                <td>
                    <p align="left">
                        <font color="black">{{ $fecha_nacimiento }} (Edad: {{ $edad }})</font>
                    </p>
                </td>
            </tr>

            <tr>
                <td><strong>¿Vio toda la Unión escamoso-cilíndrica (UEC)?</strong><span>(En caso negativo, sopese la
                        posibilidad de legrado endocervical)</span></td>
                <td align="left">
                    {{ $colposcopia->union_escamoso_cilindrica }}
                </td>
            </tr>

            <tr>
                <td><strong>En caso negativo, sopese la posibilidad de legrado endocervical:</strong></td>
                <td align="left">
                    {{ $colposcopia->legrado_endocervical }}
                </td>
            </tr>

            <tr>
                <td><strong>Colposcopia insatisfactoria:</strong></td>
                <td align="left">
                    {{ $colposcopia->colposcopia_insatisfactoria }}
                </td>
            </tr>

            <tr>
                <td colspan="2"><strong><u>Hallazgos colposcópicos dentro de la zona de transformación</u></strong>
                </td>
            </tr>

            <tr>
                <td><strong>- Epitelio acetoblanco plano</strong></td>
                <td align="left">
                    @if ($colposcopia->hd_eap == 1)
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" checked disabled>
                        </div>
                    @else
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" disabled>
                        </div>
                    @endif
                </td>
            </tr>

            <tr>
                <td><strong>- Epitelio acetoblanco mícropapilar o cerebroide</strong></td>
                <td align="left">
                    @if ($colposcopia->hd_eam == 1)
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" checked disabled>
                        </div>
                    @else
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" disabled>
                        </div>
                    @endif
                </td>
            </tr>

            <tr>
                <td><strong>- Leucoplasia</strong></td>
                <td align="left">
                    @if ($colposcopia->hd_leucoplasia == 1)
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" checked disabled>
                        </div>
                    @else
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" disabled>
                        </div>
                    @endif
                </td>
            </tr>

            <tr>
                <td><strong>- Punteando</strong></td>
                <td align="left">
                    @if ($colposcopia->hd_punteando == 1)
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" checked disabled>
                        </div>
                    @else
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" disabled>
                        </div>
                    @endif
                </td>
            </tr>

            <tr>
                <td><strong>- Mosaico</strong></td>
                <td align="left">
                    @if ($colposcopia->hd_mosaico == 1)
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" checked disabled>
                        </div>
                    @else
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" disabled>
                        </div>
                    @endif
                </td>
            </tr>

            <tr>
                <td><strong>- Vasos atípicos</strong></td>
                <td align="left">
                    @if ($colposcopia->hd_vasos == 1)
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" checked disabled>
                        </div>
                    @else
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" disabled>
                        </div>
                    @endif
                </td>
            </tr>

            <tr>
                <td><strong>- Área yodonegativas</strong></td>
                <td align="left">
                    @if ($colposcopia->hd_area == 1)
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" checked disabled>
                        </div>
                    @else
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" disabled>
                        </div>
                    @endif
                </td>
            </tr>

            <tr>
                <td><strong>- Otros</strong></td>
                <td align="left">
                    @if ($colposcopia->hd_otros == 1)
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" checked disabled>
                        </div>
                    @else
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" disabled>
                        </div>
                    @endif
                </td>
            </tr>

            <tr>
                <td><strong>- Otros (Especificar)</strong></td>
                <td align="left">
                    {{ $colposcopia->hd_otros_especificar }}
                </td>
            </tr>

            <tr>
                <td><strong>Hallazgos fuera de la zona de transformación</strong></td>
                <td align="left">
                    {{ $colposcopia->hallazgos_fuera }}
                </td>
            </tr>

            <tr>
                <td><strong>Sospecha colposcópica de carcinoma invasor</strong></td>
                <td align="left">
                    {{ $colposcopia->carcinoma_invasor }}
                </td>
            </tr>

            <tr>
                <td><strong>Otros Hallazgos</strong></td>
                <td align="left">
                    {{ $colposcopia->otros_hallazgos }}
                </td>
            </tr>

            <tr>
                <td colspan="2"><strong><u>Diagnósticos colposcópicos</u></strong></td>
            </tr>

            <tr>
                <td><strong>- Colposcopia insatisfactoria (Especifique)</strong></td>
                <td align="left">
                    @if ($colposcopia->dcn_insatisfactoria == 1)
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" checked disabled>
                        </div>
                    @else
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" disabled>
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><strong>Especificar:</strong></td>
                <td align="left">
                    {{ $colposcopia->dcn_insatisfactoria_especifique }}
                </td>
            </tr>

            <tr>
                <td><strong>- Hallazgos colposcópicos normales</strong></td>
                <td align="left">
                    @if ($colposcopia->hallazgos_nomales == 1)
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" checked disabled>
                        </div>
                    @else
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" disabled>
                        </div>
                    @endif
                </td>
            </tr>

            <tr>
                <td><strong>- Hallazgos colposcópicos anormales (especifique): </strong></td>
                <td align="left">
                    @if ($colposcopia->inflamacion_infeccion == 1)
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" checked disabled>
                        </div>
                    @else
                        <div class="primary-checkbox">
                            <input type="checkbox" name="hd_eap" disabled>
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><strong>Especificar:</strong></td>
                <td align="left">
                    {{ $colposcopia->inflamacion_infeccion_especifique }}
                </td>
            </tr>
            <tr>
                <td><strong>- ¿Se realiza biopsia? </strong></td>
                <td align="left">
                    @if ($colposcopia->biopsia == 1)
                        <div class="primary-checkbox">
                            <input type="checkbox" name="biopsia" checked disabled>
                        </div>
                    @else
                        <div class="primary-checkbox">
                            <input type="checkbox" name="biopsia" disabled>
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><strong>Indicar número y localización:</strong></td>
                <td>
                    {{ $colposcopia->numero_localizacion }}
                </td>
            </tr>
            <tr>
                <td><strong>- ¿Se realiza legrado endocervical? </strong></td>
                <td align="left">
                    @if ($colposcopia->legrado == 1)
                        <div class="primary-checkbox">
                            <input type="checkbox" name="legrado" checked disabled>
                        </div>
                    @else
                        <div class="primary-checkbox">
                            <input type="checkbox" name="legrado" disabled>
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><strong>Otros hallazgos:</strong></td>
                <td align="left">
                    {{ $colposcopia->otros_hallazgos_colposcopicos }}
                </td>
            </tr>

        </table>
    </div>

    <div style="text-align:center;">
        <table>
            <tr>
                <th colspan="2">
                    <p align="center">Imagenes: </p>
                </th>
            </tr>
            @foreach ($colposcopiaimgs as $imagen)
                <tr>
                    <td><img src="{{ $path . $imagen->imagen }}" alt="" height="200"></td>
                    <?php
                    $fechaimagen = date('d-m-Y', strtotime($imagen->fecha));
                    ?>
                    <td>
                        <p align="left">
                            <font color="black">{{ $fechaimagen }} - {{ $imagen->descripcion }}</font>
                        </p>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <br>
    <h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2022 <a
            class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos
        reservados.</h6>
</body>

</html>
