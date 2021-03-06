<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body style="margin: 0; padding: 0;">
    <table role="presentation" bgcolor="#F1F1F1" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <table align="center" bgcolor="#ffffff" cellpadding="0" cellspacing="0" width="400" style="border-collapse: collapse; margin-top: 20px; margin-bottom: 20px;">
                <tr>
                    <td align="center" style="padding: 40px 0 30px 0; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%)">
                        <h1 style="color: white;">Gisty!</h1>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                        <table cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                            <tr>
                                <td>
                                    <p style="margin: 0;">Dear {{ $user['fullname'] }},</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 20px 0 30px 0;">
                                    <p style="margin: 0;">Your new summary was successfully created. Below are the details - </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="margin: 0;"><strong>Summary Title</strong> - {{ $summary['title'] }}</p>
                                    <p style="margin: 0;"><strong>Folder Name</strong> - {{ $summary['folder'] }}</p>
                                    <p style="margin: 0;"><strong>Number of Snapshots</strong> - {{ count($summary['snapshots'])}}</p>
                                    <p style="margin: 0;"><strong>Summary created at</strong> - {{ $summary['created_at'] }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 20px 0 30px 0;">
                                    <p style="margin: 0;">Regards,</p>
                                    <p style="margin: 0;">Team Gisty</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </tr>
    </table>
</body>
</html>