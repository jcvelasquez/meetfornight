<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <style>

        .header-perfil{
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 2em 0;
            background: url(http://meetfornight.com/img/header-perfil.jpg);
        }

        body { padding:0; margin: 0; }

        .header-perfil img { width: 350px; }

        .footer .content-cell img { width: 250px; }

        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
            .header-perfil img { max-width: 70% !important; }
            .footer .content-cell img { width: 120px !important; }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
            
        }
    </style>

</head>
<body>
    

    <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                     {{ $header ?? '' }} 

                    <!-- Email Body -->
                    <tr>
                        <td class="body" width="100%" cellpadding="0" cellspacing="0">
                            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                <!-- Body content -->
                                <tr>
                                    <td class="content-cell">
                                        {{ Illuminate\Mail\Markdown::parse($slot) }}

                                        {{ $subcopy ?? '' }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                     {{ $footer ?? '' }} 
                </table>
            </td>
        </tr>
    </table>


</body>
</html>
