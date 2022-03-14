<!DOCTYPE html>
<html>

<head>

    <title>El Mana Email</title>
    <link rel="shortcut icon" href="favicon.ico">

    <style type="text/css">
        table[name="blk_permission"],
        table[name="blk_footer"] {
            display: none;
        }
    </style>

    <meta name="googlebot" content="noindex" />
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW" />
    <link rel="stylesheet" href="/style/dhtmlwindow.css" type="text/css" />
    <script type="text/javascript" src="/script/dhtmlwindow.js">
        /***********************************************
         * DHTML Window Widget- © Dynamic Drive (www.dynamicdrive.com)
         * This notice must stay intact for legal use.
         * Visit www.dynamicdrive.com for full source code
         ***********************************************/
    </script>
    <link rel="stylesheet" href="/style/modal.css" type="text/css" />
    <script type="text/javascript" src="/script/modal.js"></script>
    <script type="text/javascript">
        function show_popup(popup_name, popup_url, popup_title, width, height) {
            var widthpx = width + "px";
            var heightpx = height + "px";
            emailwindow = dhtmlmodal.open(popup_name, 'iframe', popup_url, popup_title, 'width=' + widthpx + ',height=' + heightpx + ',center=1,resize=0,scrolling=1');
        }

        function show_modal(popup_name, popup_url, popup_title, width, height) {
            var widthpx = width + "px";
            var heightpx = height + "px";
            emailwindow = dhtmlmodal.open(popup_name, 'iframe', popup_url, popup_title, 'width=' + widthpx + ',height=' + heightpx + ',modal=1,center=1,resize=0,scrolling=1');
        }
        var popUpWin = 0;

        function popUpWindow(URLStr, PopUpName, width, height) {
            if (popUpWin) {
                if (!popUpWin.closed) popUpWin.close();
            }
            var left = (screen.width - width) / 2;
            var top = (screen.height - height) / 2;
            popUpWin = open(URLStr, PopUpName, 'toolbar=0,location=0,directories=0,status=0,menub	ar=0,scrollbar=0,resizable=0,copyhistory=yes,width=' + width + ',height=' + height + ',left=' + left + ', 	top=' + top + ',screenX=' + left + ',screenY=' + top + '');
        }
    </script>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <style type="text/css">
        /*** BMEMBF Start ***/
        
        [name=bmeMainBody] {
            min-height: 1000px;
        }
        
        @media only screen and (max-width: 480px) {
            table.blk,
            table.tblText,
            .bmeHolder,
            .bmeHolder1,
            table.bmeMainColumn {
                width: 100% !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeImageCard table.bmeCaptionTable td.tblCell {
                padding: 0px 20px 20px 20px !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeImageCard table.bmeCaptionTable.bmeCaptionTableMobileTop td.tblCell {
                padding: 20px 20px 0 20px !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            table.bmeCaptionTable td.tblCell {
                padding: 10px !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            table.tblGtr {
                padding-bottom: 20px !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            td.blk_container,
            .blk_parent,
            .bmeLeftColumn,
            .bmeRightColumn,
            .bmeColumn1,
            .bmeColumn2,
            .bmeColumn3,
            .bmeBody {
                display: table !important;
                max-width: 600px !important;
                width: 100% !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            table.container-table,
            .bmeheadertext,
            .container-table {
                width: 95% !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .mobile-footer,
            .mobile-footer a {
                font-size: 13px !important;
                line-height: 18px !important;
            }
            .mobile-footer {
                text-align: center !important;
            }
            table.share-tbl {
                padding-bottom: 15px;
                width: 100% !important;
            }
            table.share-tbl td {
                display: block !important;
                text-align: center !important;
                width: 100% !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            td.bmeShareTD,
            td.bmeSocialTD {
                width: 100% !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            td.tdBoxedTextBorder {
                width: auto !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            table.blk,
            table[name=tblText],
            .bmeHolder,
            .bmeHolder1,
            table[name=bmeMainColumn] {
                width: 100% !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeImageCard table.bmeCaptionTable td[name=tblCell] {
                padding: 0px 20px 20px 20px !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeImageCard table.bmeCaptionTable.bmeCaptionTableMobileTop td[name=tblCell] {
                padding: 20px 20px 0 20px !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            table.bmeCaptionTable td[name=tblCell] {
                padding: 10px !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            table[name=tblGtr] {
                padding-bottom: 20px !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            td.blk_container,
            .blk_parent,
            [name=bmeLeftColumn],
            [name=bmeRightColumn],
            [name=bmeColumn1],
            [name=bmeColumn2],
            [name=bmeColumn3],
            [name=bmeBody] {
                display: table !important;
                max-width: 600px !important;
                width: 100% !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            table[class=container-table],
            .bmeheadertext,
            .container-table {
                width: 95% !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .mobile-footer,
            .mobile-footer a {
                font-size: 13px !important;
                line-height: 18px !important;
            }
            .mobile-footer {
                text-align: center !important;
            }
            table[class="share-tbl"] {
                padding-bottom: 15px;
                width: 100% !important;
            }
            table[class="share-tbl"] td {
                display: block !important;
                text-align: center !important;
                width: 100% !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            td[name=bmeShareTD],
            td[name=bmeSocialTD] {
                width: 100% !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            td[name=tdBoxedTextBorder] {
                width: auto !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeImageCard table.bmeImageTable {
                height: auto !important;
                width: 100% !important;
                padding: 20px !important;
                clear: both;
                float: left !important;
                border-collapse: separate;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeMblInline table.bmeImageTable {
                height: auto !important;
                width: 100% !important;
                padding: 10px !important;
                clear: both;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeMblInline table.bmeCaptionTable {
                width: 100% !important;
                clear: both;
            }
        }
        
        @media only screen and (max-width: 480px) {
            table.bmeImageTable {
                height: auto !important;
                width: 100% !important;
                padding: 10px !important;
                clear: both;
            }
        }
        
        @media only screen and (max-width: 480px) {
            table.bmeCaptionTable {
                width: 100% !important;
                clear: both;
            }
        }
        
        @media only screen and (max-width: 480px) {
            table.bmeImageContainer {
                width: 100% !important;
                clear: both;
                float: left !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            table.bmeImageTable td {
                padding: 0px !important;
                height: auto;
            }
        }
        
        @media only screen and (max-width: 480px) {
            td.bmeImageContainerRow {
                padding: 0px !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            img.mobile-img-large {
                width: 100% !important;
                height: auto !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            img.bmeRSSImage {
                max-width: 320px;
                height: auto !important;
            }
        }
        
        @media only screen and (min-width: 640px) {
            img.bmeRSSImage {
                max-width: 600px !important;
                height: auto !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .trMargin img {
                height: 10px;
            }
        }
        
        @media only screen and (max-width: 480px) {
            div.bmefooter,
            div.bmeheader {
                display: block !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .tdPart {
                width: 100% !important;
                clear: both;
                float: left !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            table.blk_parent1,
            table.tblPart {
                width: 100% !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .tblLine {
                min-width: 100% !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeMblCenter img {
                margin: 0 auto;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeMblCenter,
            .bmeMblCenter div,
            .bmeMblCenter span {
                text-align: center !important;
                text-align: -webkit-center !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeNoBr br,
            .bmeImageGutterRow,
            .bmeMblStackCenter .bmeShareItem .tdMblHide {
                display: none !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeMblInline table.bmeImageTable,
            .bmeMblInline table.bmeCaptionTable,
            td.bmeMblInline {
                clear: none !important;
                width: 50% !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeMblInlineHide,
            .bmeShareItem .trMargin {
                display: none !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeMblInline table.bmeImageTable img,
            .bmeMblShareCenter.tblContainer.mblSocialContain,
            .bmeMblFollowCenter.tblContainer.mblSocialContain {
                width: 100% !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeMblStack> .bmeShareItem {
                width: 100% !important;
                clear: both !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeShareItem {
                padding-top: 10px !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .tdPart.bmeMblStackCenter,
            .bmeMblStackCenter .bmeFollowItemIcon {
                padding: 0px !important;
                text-align: center !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeMblStackCenter> .bmeShareItem {
                width: 100% !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            td.bmeMblCenter {
                border: 0 none transparent !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeLinkTable.tdPart td {
                padding-left: 0px !important;
                padding-right: 0px !important;
                border: 0px none transparent !important;
                padding-bottom: 15px !important;
                height: auto !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .tdMblHide {
                width: 10px !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeShareItemBtn {
                display: table !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeMblStack td {
                text-align: left !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeMblStack .bmeFollowItem {
                clear: both !important;
                padding-top: 10px !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeMblStackCenter .bmeFollowItemText {
                padding-left: 5px !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .bmeMblStackCenter .bmeFollowItem {
                clear: both !important;
                align-self: center;
                float: none !important;
                padding-top: 10px;
                margin: 0 auto;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .tdPart> table {
                width: 100% !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .tdPart>table.bmeLinkContainer {
                width: auto !important;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .tdPart.mblStackCenter>table.bmeLinkContainer {
                width: 100% !important;
            }
        }
        
        .blk_parent:first-child,
        .blk_parent {
            float: left;
        }
        
        .blk_parent:last-child {
            float: right;
        }
        /*** BMEMBF END ***/
        
        table[name="bmeMainBody"],
        body {
            background-color: #2f2f2f;
        }
        
        td[name="bmePreHeader"] {
            background-color: #FFA100;
        }
        
        td[name="bmeHeader"] {
            background: #ffffff;
            background-color: #FFA100;
        }
        
        td[name="bmeBody"],
        table[name="bmeBody"] {
            background-color: #ffffff;
        }
        
        td[name="bmePreFooter"] {
            background-color: #ffffff;
        }
        
        td[name="bmeFooter"] {
            background-color: #ffffff;
        }
        
        td[name="tblCell"],
        .blk {
            font-family: initial;
            font-weight: normal;
            font-size: initial;
        }
        
        table[name="blk_blank"] td[name="tblCell"] {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }
        
        [name=bmeMainContentParent] {
            border-color: #666666;
            border-width: 0px;
            border-style: none;
            border-radius: 0px;
            border-collapse: separate;
            border-spacing: 0px;
            overflow: hidden;
        }
        
        [name=bmeMainColumnParent] {
            border-color: transparent;
            border-width: 0px;
            border-style: none;
            border-radius: 0px;
        }
        
        [name=bmeMainColumn] {
            border-color: transparent;
            border-width: 0px;
            border-style: none;
            border-radius: 0px;
            border-collapse: separate;
            border-spacing: 0px;
        }
        
        [name=bmeMainContent] {
            border-color: transparent;
            border-width: 0px;
            border-style: none;
            border-radius: 0px;
            border-collapse: separate;
            border-spacing: 0px;
        }
    </style>
</head>

<body marginheight=0 marginwidth=0 topmargin=0 leftmargin=0 style="height: 100% !important; margin: 0; padding: 0; width: 100% !important;min-width: 100%;">

    <table width="100%" cellspacing="0" cellpadding="0" border="0" name="bmeMainBody" style="background-color: rgb(47, 47, 47);" bgcolor="#2f2f2f">
        <tbody>
            <tr>
                <td width="100%" valign="top" align="center">
                    <table cellspacing="0" cellpadding="0" border="0" name="bmeMainColumnParentTable">
                        <tbody>
                            <tr>
                                <td name="bmeMainColumnParent" style="border: 0px none transparent; border-radius: 0px; border-collapse: separate;">
                                    <table name="bmeMainColumn" class="bmeHolder bmeMainColumn" style="max-width: 600px; border-radius: 0px; border-collapse: separate; border-spacing: 0px; overflow: visible;" cellspacing="0" cellpadding="0" border="0" align="center">
                                        <tbody>
                                            <tr>
                                                <td width="100%" class="blk_container bmeHolder" name="bmePreHeader" valign="top" align="center" style="color: rgb(102, 102, 102); border: 0px none transparent; background-color: rgb(255,161,0);" bgcolor="#FFA100"></td>
                                            </tr>
                                            <tr>
                                                <td width="100%" class="bmeHolder" valign="top" align="center" name="bmeMainContentParent" style="border: 0px none rgb(102, 102, 102); border-radius: 0px; border-collapse: separate; border-spacing: 0px; overflow: hidden;">
                                                    <table name="bmeMainContent" style="border-radius: 0px; border-collapse: separate; border-spacing: 0px; border: 0px none transparent;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                                        <tbody>
                                                            <tr>
                                                                <td width="100%" class="blk_container bmeHolder" name="bmeHeader" valign="top" align="center" style="color: rgb(56, 56, 56); border: 0px none transparent; background-color: rgb(255,161,0);" bgcolor="#FFA100">
                                                                    <div id="dv_1" class="blk_wrapper" style="">
                                                                        <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_text">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%" class="bmeContainerRow">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="tdPart" valign="top" align="center">
                                                                                                        <table cellspacing="0" cellpadding="0" border="0" width="600" name="tblText" style="float:left; background-color:transparent;" align="left" class="tblText">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td valign="top" align="left" name="tblCell" style="padding: 15px 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 400; color: rgb(56, 56, 56); text-align: left;" class="tblCell">
																														<div style="line-height: 150%; text-align: right;"><span style="font-size: 12px; font-family: 'Courier New', Courier; color: #ffffff; line-height: 150%;"><span style="text-decoration: underline; line-height: 150%;">
																															<a href="{{ url('/') }}"><p class="site"><font color="white">www.elmana.com.gt</font></p></a></span></span>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="100%" class="blk_container bmeHolder bmeBody" name="bmeBody" valign="top" align="center" style="color: rgb(56, 56, 56); border: 0px none transparent; background-color: rgb(255, 255, 255);" bgcolor="#ffffff">
                                                                    <div id="dv_15" class="blk_wrapper" style="">
                                                                        <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_divider" style="">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="tblCellMain" style="padding: 10px 0px;">
                                                                                        <table class="tblLine" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-top-width: 0px; border-top-style: none; min-width: 1px;">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><span></span></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_11" class="blk_wrapper" style="">
                                                                        <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_image">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="center" class="bmeImage" style="border-collapse: collapse; padding: 20px;"><a href="{{ url('/') }}"><img src="{{asset('/img/logo.png')}}" alt="Comfort Dreams" height="100"></a></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_17" class="blk_wrapper" style="">
                                                                        <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_text">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%" class="bmeContainerRow">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="tdPart" valign="top" align="center">
                                                                                                        <table cellspacing="0" cellpadding="0" border="0" width="600" name="tblText" style="float:left; background-color:transparent;" align="left" class="tblText">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td valign="top" align="left" name="tblCell" style="padding: 10px 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 400; color: rgb(56, 56, 56); text-align: left;" class="tblCell">
                                                                                                                        <div style="line-height: 150%; text-align: center;">
                                                                                                                            <span style="font-size: 16px; font-family: 'Courier New', Courier; color: #464646; line-height: 150%;">
                                                                                                                            <strong><font font color="black"><h1>Cuenta de usuario </h1></font></strong
                                                                                                                                <strong><font font color="black">Se te a creado una cuenta de usuario para poder realizar compras y gestionar las mismas desde nuestra página, los datos para ingresar a tu cuenta son los siguientes:</font></strong>
                                                                                                                            </span>
                                                                                                                            <ul>
                                                                                                                                <li>Nombre: {{ $nombre }}</li>
                                                                                                                                <li>Usuario: {{ $email }}</li>
                                                                                                                                <li>Contraseña: {{ $contrasena }}</li>
                                                                                                                                <br><span style="font-size: 14px; font-family: 'Courier New', Courier; color: #464646; line-height: 150%;">Para entrar a tu cuenta solo entra a nuestra pagina web desde el siguiente botón e ve al apartado para iniciar sesión, coloca tus datos y podrás gestionar tus ordenes o realizar nuevas compras: </span>
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_18" class="blk_wrapper" style="">
                                                                        <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_button" style="">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="20"></td>
                                                                                    <td align="center">
                                                                                        <table class="tblContainer" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td height="15"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td align="center">
                                                                                                        <table cellspacing="0" cellpadding="0" border="0" class="bmeButton" align="center" style="border-collapse: separate;">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td style="border-radius: 0px; border: 3px solid rgb(255,161,0); text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding: 15px 30px; font-weight: bold; border-collapse: separate;" class="bmeButtonText"><span style="font-family: 'Courier New', Courier; font-size: 14px; color: rgb(66, 66, 66);"><a href="{{ url('/') }}" style="color: rgb(66, 66, 66); text-decoration: none;" target="_blank">Ir a la Pagina</a></span></td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="15"></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td width="20"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td width="100%" class="blk_container bmeHolder" name="bmePreFooter" valign="top" align="center" style="color: rgb(56, 56, 56); border: 0px none transparent; background-color: rgb(255, 255, 255);" bgcolor="#ffffff">
                                                                    
                                                                    <div id="dv_14" class="blk_wrapper" style="">
                                                                        <table cellspacing="0" cellpadding="0" border="0" style="" name="blk_social_follow" width="600" class="blk">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="tblCellMain" align="center" style="padding-top:20px; padding-bottom:20px; padding-left:20px; padding-right:20px;">
                                                                                        <table class="tblContainer mblSocialContain" cellspacing="0" cellpadding="0" border="0" align="center" style="text-align:center;">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="tdItemContainer" style="">
                                                                                                        <table cellspacing="0" cellpadding="0" border="0" class="mblSocialContain" style="table-layout: auto;">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td valign="top" name="bmeSocialTD" class="bmeSocialTD">
                                                                                                                        <!--[if gte mso 6]></td><td align="left" valign="top"><![endif]-->
                                                                                                                        <table cellspacing="0" cellpadding="0" border="0" class="bmeFollowItem" type="facebook" style="float: left; display: block;" align="left">
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                    <td align="left" class="bmeFollowItemIcon" gutter="20" width="24" style="padding-right:20px;height:20px;">
                                                                                                                                        <a href="https://www.facebook.com/distribuidoraelmanaxela" target=_blank style="display: inline-block;background-color: rgb(255,161,0);border-radius: 0px;border-style: none; border-width: 0px; border-color: rgba(0, 0, 0, 0);" target="_blank"><img src="{{asset('/img/fb.png')}}" alt="Facebook" style="display: block; max-width: 114px;" border="0" width="24" height="24"></a>
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                        <!--[if gte mso 6]></td><td align="left" valign="top"><![endif]-->
                                                                                                                        <table cellspacing="0" cellpadding="0" border="0" class="bmeFollowItem" type="Instagram" style="float: left; display: block;" align="left">
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                    <td align="left" class="bmeFollowItemIcon" gutter="20" width="24" style="padding-right:20px;height:20px;">
                                                                                                                                        <a href="#" target=_blank style="display: inline-block;background-color: rgb(255,161,0);border-radius: 0px;border-style: none; border-width: 0px; border-color: rgba(0, 0, 0, 0);" target="_blank"><img src="{{asset('/img/insta.png')}}" alt="Instagram" style="display: block; max-width: 114px;" border="0" width="24" height="24"></a>
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                        <!--[if gte mso 6]></td><td align="left" valign="top"><![endif]-->
                                                                                                                        
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_10" class="blk_wrapper" style="">
                                                                        <table cellspacing="0" cellpadding="0" border="0" name="blk_divider" width="600" class="blk">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="padding: 10px 0px;" class="tblCellMain">
                                                                                        <table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-top-width: 0px; border-top-style: none; min-width: 1px;" class="tblLine">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><span></span></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>