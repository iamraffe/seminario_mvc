<?php namespace models\admin;

class Invitar extends \core\model
{

    /**
     * Get all invitados
     * @return [type] [description]
     */
    public function getInvitados()
    {
            return $this->_db->select("SELECT * FROM Invitaciones ORDER BY Id");
    }
    /**
     * Get a single (specific) invitado
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getInvitado($id)
    {
        return $this->_db->select("SELECT * FROM Invitaciones WHERE Id = :Id", array(':Id' => $id));
    }
    /**
     * Send email invite
     * @param  [type] $invitado [description]
     * @return [type]           [description]
     */
    public function sendInvite($invitado)
    {
        $sendTo['nombre'] = $invitado[0]->Nombre;
        $sendTo['correo'] = $invitado[0]->Correo;
        $body = '
<html>
<head>
<title>InvitaciÃ³n 2Âº Seminario Internacional de Seguridad del Paciente y Excelencia ClÃ­nica</title>
<link rel="important stylesheet" href="chrome://messagebody/skin/messageBody.css">
</head>
<body>
<html><head><meta http-equiv="Content-Type" content="text/html "><meta charset="utf-8"></head><body style="word-wrap: break-word; -webkit-nbsp-mode: space; -webkit-line-break: after-white-space;"><div><div><div style="word-wrap: break-word; -webkit-nbsp-mode: space; -webkit-line-break: after-white-space;"><div><div style="word-wrap: break-word; -webkit-nbsp-mode: space; -webkit-line-break: after-white-space;"><div><div style="word-wrap: break-word; -webkit-nbsp-mode: space; -webkit-line-break: after-white-space;"><div><div style="word-wrap: break-word; -webkit-nbsp-mode: space; -webkit-line-break: after-white-space;"><div><div style="word-wrap: break-word; -webkit-nbsp-mode: space; -webkit-line-break: after-white-space;"><div><div style="word-wrap: break-word; -webkit-nbsp-mode: space; -webkit-line-break: after-white-space;"><div><div style="word-wrap: break-word; -webkit-nbsp-mode: space; -webkit-line-break: after-white-space;"><div><div style="word-wrap: break-word; -webkit-nbsp-mode: space; -webkit-line-break: after-white-space;"><div><div style="word-wrap: break-word; -webkit-nbsp-mode: space; -webkit-line-break: after-white-space;"><div><div lang="ES" link="blue" vlink="purple"><div class="WordSection1"><div align="center"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;background:#F2F2F2;border-collapse:collapse"><tbody><tr><td valign="top" style="padding:0cm 0cm 0cm 0cm"><div align="center"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse"><tbody><tr><td valign="top" style="padding:0cm 0cm 0cm 0cm"><br></td></tr><tr><td valign="top" style="padding:0cm 0cm 0cm 0cm;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><div align="center"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width: 100%; background-color: white; border-collapse: collapse; z-index: auto; position: static;" id="templateHeader"><tbody><tr><td valign="top" style="padding:0cm 0cm 0cm 0cm;z-index:auto"><div align="center"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="600" style="width:450.0pt;border-collapse:collapse;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><tbody><tr><td valign="top" style="padding:7.5pt 0cm 7.5pt 0cm;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><tbody><tr><td valign="top" style="padding:6.75pt 6.75pt 6.75pt 6.75pt;z-index:auto"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" align="left" width="100%" style="width:100.0%;border-collapse:collapse;margin-left:-2.25pt;margin-right:-2.25pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><tbody><tr><td valign="top" style="padding:0cm 6.75pt 0cm 6.75pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><p class="MsoNormal" align="center" style="text-align:center"><!--[if gte vml 1]><v:shapetype id="_x0000_t75" coordsize="21600,21600" o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe" filled="f" stroked="f">
<v:stroke joinstyle="miter" />
<v:formulas>
<v:f eqn="if lineDrawn pixelLineWidth 0" />
<v:f eqn="sum @0 1 0" />
<v:f eqn="sum 0 0 @1" />
<v:f eqn="prod @2 1 2" />
<v:f eqn="prod @3 21600 pixelWidth" />
<v:f eqn="prod @3 21600 pixelHeight" />
<v:f eqn="sum @0 0 1" />
<v:f eqn="prod @6 1 2" />
<v:f eqn="prod @7 21600 pixelWidth" />
<v:f eqn="sum @8 21600 0" />
<v:f eqn="prod @7 21600 pixelHeight" />
<v:f eqn="sum @10 21600 0" />
</v:formulas>
<v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect" />
<o:lock v:ext="edit" aspectratio="t" />
</v:shapetype><v:shape id="_x0000_s1026" type="#_x0000_t75" alt="" style="position:absolute;left:0;text-align:left;margin-left:0;margin-top:0;width:416.25pt;height:84pt;z-index:251658240;mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;mso-position-horizontal:left;mso-position-horizontal-relative:text;mso-position-vertical-relative:line" o:allowoverlap="f">
<v:imagedata src="https://gallery.mailchimp.com/ab2d2685dae24103488874f87/images/0107cf51-f5cc-478c-9d16-458ac5743cf5.png" />
<w:wrap type="square"/>
</v:shape><![endif]--><!--[if !vml]--><img width="555" src="https://gallery.mailchimp.com/ab2d2685dae24103488874f87/images/0107cf51-f5cc-478c-9d16-458ac5743cf5.png" align="left" v:shapes="_x0000_s1026"><!--[endif]--><o:p></o:p></p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></div></td></tr></tbody></table></div></td></tr><tr><td valign="top" style="padding:0cm 0cm 0cm 0cm;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><div align="center"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width: 100%; background-color: white; border-collapse: collapse; z-index: auto; position: static; background-position: initial initial; background-repeat: initial initial;" id="templateBody"><tbody><tr><td valign="top" style="padding:0cm 0cm 0cm 0cm;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><div align="center"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="600" style="width:450.0pt;border-collapse:collapse;z-index:auto"><tbody><tr><td valign="top" style="padding:7.5pt 0cm 7.5pt 0cm;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width: 100%; border-collapse: collapse; z-index: auto; position: static;"><tbody><tr><td valign="top" style="padding:0cm 0cm 0cm 0cm;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" align="left" width="600" style="width: 450pt; border-collapse: collapse; z-index: auto; position: static;"><tbody><tr><td valign="top" style="padding:6.75pt 13.5pt 6.75pt 13.5pt"><h1><span style="line-height: 125%; font-size: 12px;"><font color="#5e5e5e" face="Arial">'.$invitado[0]->Tratamiento.' '.$invitado[0]->Invitado.'</font></span></h1>
<div><p class="MsoNormal" style="text-align:justify;line-height:150%"><span style="line-height: 150%; font-size: 12px;"><font color="#5e5e5e" face="Arial"><b>'.$invitado[0]->Hospital.'</b></font></span><o:p></o:p></p></div><h1><span style="font-size:9.0pt;line-height:125%;font-family:&quot;Arial&quot;,sans-serif"><br></span></h1><h1><span style="line-height: 125%; font-size: 12px;"><font face="Arial">En nombre del grupo IDCsalud-Quirón, es un honor poder invitarle&nbsp;a&nbsp;participar como ASISTENTE en la segunda&nbsp;edición del Seminario Internacional de Seguridad del Paciente y Excelencia Clínica "International Seminar on Patient Safety and&nbsp;Clinical Excellence" que se celebrará en la Fundación Jiménez Díaz de Madrid el próximo 28&nbsp;de mayo.</font></span><o:p></o:p></h1><p class="p1" style="mso-margin-top-alt:12.0pt;margin-right:0cm;margin-bottom:12.0pt;margin-left:0cm;text-align:justify;line-height:150%"><span style="font-size:9.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#606060">Contaremos con ponentes de reconocido prestigio internacional como el <strong><span style="font-family:&quot;Arial&quot;,sans-serif">Dr. Donald M. Berwick</span></strong>, que fue miembro del equipo de trabajo del presidente&nbsp;Barack Obama y es&nbsp;principal&nbsp;defensor&nbsp;en&nbsp;los Estados Unidos de la asistencia sanitaria de alta calidad; el <strong><span style="font-family:&quot;Arial&quot;,sans-serif">Dr. Johan Van Eldere, &nbsp;c</span></strong>atedrático de Microbiología en la Universidad Católica de Leuven y jefe del Centro de Diagnóstico Molecular&nbsp;en Leuven; y el bioquímico y biólogo molecular <strong><span style="font-family:&quot;Arial&quot;,sans-serif">D. Stephen McAdam</span></strong>, director técnico del Cuidado Global de la Salud en&nbsp;DNV GL. Noruega.<br><br>Después de las ponencias, se realizará&nbsp;una mesa redonda&nbsp;o sesión de debate sobre las ideas expuestas por los conferenciantes y para ello contaremos con la presencia de acreditados&nbsp;profesionales españoles como son el </span><span style="line-height: 150%; color: rgb(96, 96, 96); font-size: 12px;"><font face="Arial"><b>Dr. Fraile Moreno</b></font></span><span style="font-size:9.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#606060">, director técnico de la Unidad de Radiodiagnóstico de la Comunidad de Madrid; el </span><span style="line-height: 150%; color: rgb(96, 96, 96); font-size: 12px;"><font face="Arial"><b>Dr. García-Foncillas</b></font></span><span style="font-size:9.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#606060">, director del departamento de Oncología del Hospital Universitario Fundación Jiménez Díaz; el </span><span style="line-height: 150%; color: rgb(96, 96, 96); font-size: 12px;"><font face="Arial"><b>Dr. Gratacós</b></font></span><span style="font-size:9.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#606060">, jefe del Servicio Médico Materno Fetal del Hospital Clínico de Barcelona; la </span><span style="line-height: 150%; color: rgb(96, 96, 96); font-size: 12px;"><font face="Arial"><b>Dra. Moral</b></font></span><span style="font-size:9.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#606060">, directora corporativa de Desarrollo Asistencial de IDCsalud-Quirón; el </span><span style="line-height: 150%; color: rgb(96, 96, 96); font-size: 12px;"><font face="Arial"><b>Dr. de Sancho</b></font></span><span style="font-size:9.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#606060">, especialista en gestión sanitaria; el </span><span style="line-height: 150%; color: rgb(96, 96, 96); font-size: 12px;"><font face="Arial"><b>Dr. Varela Simó,</b></font></span><span style="font-size:9.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#606060"> jefe del Servicio de Cirugía Torácica del Hospital Universitario de Salamanca y </span><span style="line-height: 150%; color: rgb(96, 96, 96); font-size: 12px;"><font face="Arial"><b>D. Adolfo Fernandez-Valmayor</b></font></span><span style="font-size:9.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#606060">, director general de organización, procesos y TIC &amp; Digital de IDCsalud-Quirón. &nbsp; &nbsp;<br><br>Puede encontrar información más completa del seminario, horarios, localización y programa, en la página diseñada para el evento: <span class="s1"><a href="http://www.seminarioexcelencia.com/"><span style="color:#6DC6DD">http://www.seminarioexcelencia.com</span></a></span><br><br>El aforo al seminario es limitado, por ello si está interesado en asistir, le rogamos realice su inscripción &nbsp; en la página web del seminario&nbsp;a la mayor brevedad posible.&nbsp;<br><br>Para cualquier aclaración o duda puede contactar con el equipo organizador del seminario a través del email&nbsp;</span><span style="color:#606060"><a href="mailto:seminario.excelencia@idcsalud.es"><span style="font-size:9.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">seminario.excelencia@idcsalud.es</span></a></span><span style="font-size:9.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#606060">&nbsp;&nbsp;o bien en el teléfono 913 981 628.<br>&nbsp;&nbsp;</span><span style="color:#606060"><o:p></o:p></span></p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></div></td></tr></tbody></table></div></td></tr><tr><td valign="top" style="padding:0cm 0cm 0cm 0cm;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><div align="center"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;background:white;border-collapse:collapse;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%" id="templateColumns"><tbody><tr><td valign="top" style="padding:0cm 0cm 0cm 0cm;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><div align="center"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="600" style="width:450.0pt;border-collapse:collapse;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><tbody><tr><td width="33%" valign="top" style="width:33.0%;padding:0cm 0cm 0cm 0cm;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><tbody><tr><td valign="top" style="padding:0cm 0cm 0cm 0cm;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"></td></tr></tbody></table></td><td width="33%" valign="top" style="width:33.0%;padding:0cm 0cm 0cm 0cm;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><tbody><tr><td valign="top" style="padding:0cm 0cm 0cm 0cm;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"></td></tr></tbody></table></td><td width="33%" valign="top" style="width:33.0%;padding:0cm 0cm 0cm 0cm;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><tbody><tr><td valign="top" style="padding:0cm 0cm 0cm 0cm;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"></td></tr></tbody></table></td></tr></tbody></table></div></td></tr></tbody></table></div></td></tr><tr><td valign="top" style="padding:0cm 0cm 0cm 0cm;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><div align="center"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;background:#F2F2F2;border-collapse:collapse;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%" id="templateFooter"><tbody><tr><td valign="top" style="padding:0cm 0cm 0cm 0cm;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"></td></tr></tbody></table></div></td></tr></tbody></table></div></td></tr></tbody></table></div><p class="MsoNormal"><o:p>&nbsp;</o:p></p><p class="MsoNormal"><o:p>&nbsp;</o:p></p><p class="MsoNormal"><o:p>&nbsp;</o:p></p><p class="MsoNormal"><o:p>&nbsp;</o:p></p><p class="MsoNormal"><o:p>&nbsp;</o:p></p><p class="MsoNormal"><o:p>&nbsp;</o:p></p><p class="MsoNormal"><o:p>&nbsp;</o:p></p></div></div></div><br><style><!--
/* Font Definitions */
@font-face
    {font-family:Helvetica;
    panose-1:2 11 6 4 2 2 2 2 2 4;}
@font-face
    {font-family:Helvetica;
    panose-1:2 11 6 4 2 2 2 2 2 4;}
@font-face
    {font-family:Calibri;
    panose-1:2 15 5 2 2 2 4 3 2 4;}
/* Style Definitions */
p.MsoNormal, li.MsoNormal, div.MsoNormal
    {margin:0cm;
    margin-bottom:.0001pt;
    font-size:12.0pt;
    font-family:"Times New Roman",serif;}
h1
    {mso-style-priority:9;
    mso-style-link:"Título 1 Car";
    margin:0cm;
    margin-bottom:.0001pt;
    line-height:125%;
    font-size:30.0pt;
    font-family:"Helvetica",sans-serif;
    color:#606060;
    letter-spacing:-.75pt;
    font-weight:bold;}
h2
    {mso-style-priority:9;
    mso-style-link:"Título 2 Car";
    margin:0cm;
    margin-bottom:.0001pt;
    line-height:125%;
    font-size:19.5pt;
    font-family:"Helvetica",sans-serif;
    color:#404040;
    letter-spacing:-.55pt;
    font-weight:bold;}
h3
    {mso-style-priority:9;
    mso-style-link:"Título 3 Car";
    margin:0cm;
    margin-bottom:.0001pt;
    line-height:125%;
    font-size:13.5pt;
    font-family:"Helvetica",sans-serif;
    color:#606060;
    letter-spacing:-.4pt;
    font-weight:bold;}
h4
    {mso-style-priority:9;
    mso-style-link:"Título 4 Car";
    margin:0cm;
    margin-bottom:.0001pt;
    line-height:125%;
    font-size:12.0pt;
    font-family:"Helvetica",sans-serif;
    color:gray;
    font-weight:bold;}
h5
    {mso-style-priority:9;
    mso-style-link:"Título 5 Car";
    margin:0cm;
    margin-bottom:.0001pt;
    font-size:10.0pt;
    font-family:"Times New Roman",serif;
    font-weight:bold;}
h6
    {mso-style-priority:9;
    mso-style-link:"Título 6 Car";
    margin:0cm;
    margin-bottom:.0001pt;
    font-size:7.5pt;
    font-family:"Times New Roman",serif;
    font-weight:bold;}
a:link, span.MsoHyperlink
    {mso-style-priority:99;
    color:blue;
    text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
    {mso-style-priority:99;
    color:purple;
    text-decoration:underline;}
p
    {mso-style-priority:99;
    margin-top:12.0pt;
    margin-right:0cm;
    margin-bottom:12.0pt;
    margin-left:0cm;
    font-size:12.0pt;
    font-family:"Times New Roman",serif;}
span.Ttulo1Car
    {mso-style-name:"Título 1 Car";
    mso-style-priority:9;
    mso-style-link:"Título 1";
    font-family:"Calibri Light",sans-serif;
    color:#2E74B5;}
p.p1, li.p1, div.p1
    {mso-style-name:p1;
    mso-margin-top-alt:auto;
    margin-right:0cm;
    mso-margin-bottom-alt:auto;
    margin-left:0cm;
    font-size:12.0pt;
    font-family:"Times New Roman",serif;}
span.s1
    {mso-style-name:s1;}
span.Ttulo2Car
    {mso-style-name:"Título 2 Car";
    mso-style-priority:9;
    mso-style-link:"Título 2";
    font-family:"Calibri Light",sans-serif;
    color:#2E74B5;}
span.Ttulo3Car
    {mso-style-name:"Título 3 Car";
    mso-style-priority:9;
    mso-style-link:"Título 3";
    font-family:"Calibri Light",sans-serif;
    color:#1F4D78;}
span.Ttulo4Car
    {mso-style-name:"Título 4 Car";
    mso-style-priority:9;
    mso-style-link:"Título 4";
    font-family:"Calibri Light",sans-serif;
    color:#2E74B5;
    font-style:italic;}
span.Ttulo5Car
    {mso-style-name:"Título 5 Car";
    mso-style-priority:9;
    mso-style-link:"Título 5";
    font-family:"Calibri Light",sans-serif;
    color:#2E74B5;}
span.Ttulo6Car
    {mso-style-name:"Título 6 Car";
    mso-style-priority:9;
    mso-style-link:"Título 6";
    font-family:"Calibri Light",sans-serif;
    color:#1F4D78;}
p.readmsgbody, li.readmsgbody, div.readmsgbody
    {mso-style-name:readmsgbody;
    margin-top:12.0pt;
    margin-right:0cm;
    margin-bottom:12.0pt;
    margin-left:0cm;
    font-size:12.0pt;
    font-family:"Times New Roman",serif;}
p.externalclass, li.externalclass, div.externalclass
    {mso-style-name:externalclass;
    margin-top:12.0pt;
    margin-right:0cm;
    margin-bottom:12.0pt;
    margin-left:0cm;
    font-size:12.0pt;
    font-family:"Times New Roman",serif;}
p.mcnimage, li.mcnimage, div.mcnimage
    {mso-style-name:mcnimage;
    margin-top:12.0pt;
    margin-right:0cm;
    margin-bottom:12.0pt;
    margin-left:0cm;
    font-size:12.0pt;
    font-family:"Times New Roman",serif;}
p.mcntextcontent, li.mcntextcontent, div.mcntextcontent
    {mso-style-name:mcntextcontent;
    margin-top:12.0pt;
    margin-right:0cm;
    margin-bottom:12.0pt;
    margin-left:0cm;
    font-size:12.0pt;
    font-family:"Times New Roman",serif;}
p.mcntextcontent1, li.mcntextcontent1, div.mcntextcontent1
    {mso-style-name:mcntextcontent1;
    margin-top:12.0pt;
    margin-right:0cm;
    margin-bottom:12.0pt;
    margin-left:0cm;
    line-height:125%;
    font-size:8.5pt;
    font-family:"Helvetica",sans-serif;
    color:#606060;}
p.mcntextcontent2, li.mcntextcontent2, div.mcntextcontent2
    {mso-style-name:mcntextcontent2;
    margin-top:12.0pt;
    margin-right:0cm;
    margin-bottom:12.0pt;
    margin-left:0cm;
    line-height:150%;
    font-size:11.5pt;
    font-family:"Helvetica",sans-serif;
    color:#606060;}
p.mcntextcontent3, li.mcntextcontent3, div.mcntextcontent3
    {mso-style-name:mcntextcontent3;
    margin-top:12.0pt;
    margin-right:0cm;
    margin-bottom:12.0pt;
    margin-left:0cm;
    line-height:150%;
    font-size:11.5pt;
    font-family:"Helvetica",sans-serif;
    color:#606060;}
p.mcntextcontent4, li.mcntextcontent4, div.mcntextcontent4
    {mso-style-name:mcntextcontent4;
    margin-top:12.0pt;
    margin-right:0cm;
    margin-bottom:12.0pt;
    margin-left:0cm;
    line-height:150%;
    font-size:11.5pt;
    font-family:"Helvetica",sans-serif;
    color:#606060;}
p.mcntextcontent5, li.mcntextcontent5, div.mcntextcontent5
    {mso-style-name:mcntextcontent5;
    margin-top:12.0pt;
    margin-right:0cm;
    margin-bottom:12.0pt;
    margin-left:0cm;
    line-height:150%;
    font-size:11.5pt;
    font-family:"Helvetica",sans-serif;
    color:#606060;}
p.mcntextcontent6, li.mcntextcontent6, div.mcntextcontent6
    {mso-style-name:mcntextcontent6;
    margin-top:12.0pt;
    margin-right:0cm;
    margin-bottom:12.0pt;
    margin-left:0cm;
    line-height:150%;
    font-size:11.5pt;
    font-family:"Helvetica",sans-serif;
    color:#606060;}
p.mcntextcontent7, li.mcntextcontent7, div.mcntextcontent7
    {mso-style-name:mcntextcontent7;
    margin-top:12.0pt;
    margin-right:0cm;
    margin-bottom:12.0pt;
    margin-left:0cm;
    line-height:125%;
    font-size:8.5pt;
    font-family:"Helvetica",sans-serif;
    color:#606060;}
span.EstiloCorreo39
    {mso-style-type:personal-reply;
    font-family:"Calibri",sans-serif;
    color:#1F497D;}
.MsoChpDefault
    {mso-style-type:export-only;
    font-size:10.0pt;}
@page WordSection1
    {size:612.0pt 792.0pt;
    margin:70.85pt 3.0cm 70.85pt 3.0cm;}
div.WordSection1
    {page:WordSection1;}
--></style></div></div><br></div></div><br></div></div><br></div></div><br></div></div><br></div></div><br></div></div><br></div></div><br></div></div></div><br></body></html>
</body>
</html>
';
        $mail = new \helpers\phpmailer\mail();
        $mail -> CharSet = 'UTF-8';
        $mail->IsHTML(true);
        $mail->SetFrom('seminarioexcelencia@idcsalud.es', '2do Seminario Internacional de Seguridad del Paciente y Excelencia Clínica');
        $mail->AddAddress($sendTo['correo'], $sendTo['nombre']);
        $mail->AddReplyTo("seminarioexcelencia@idcsalud.es", "2do Seminario Internacional de Seguridad del Paciente y Excelencia Clínica");
        $mail->AddBCC('raffe90@gmail.com');
        $mail->subject('Invitación al 2do Seminario Internacional de Seguridad del Paciente y Excelencia Clínica');
        $mail->body($body);
        if(!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    }
}
?>
