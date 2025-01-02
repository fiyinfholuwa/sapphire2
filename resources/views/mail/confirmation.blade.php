<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$mailData['type']}}</title>
</head>

@if($mailData['email_type'] == 'payment')
    <body style="font-family: 'Raleway', sans-serif; background-color:#e3eaea ; font-size: 14px; max-width: 800px; margin: 0 auto; padding: 3%;">
    <div id="wrapper" style="background-color: #f0f6fb;">
        <header style="width: 98%; display: flex; justify-content: space-between; align-items: center; padding: 3%;">
            <div id="logo" style="max-width: 120px;">
                <img src="https://obidiyasapphire.com/frontend_new/assets/images/logo2.png" alt="Logo" style="max-width: 100%;" />
            </div>
            <ul id="social" style="list-style-type: none; padding: 0; margin: 0; display: flex;">
                <li style="margin-right: 10px;">
                    <a href="" target="_blank">
                        <img src="https://mdbgo.io/dawidadach/responsiveemail/img/in-color.png" alt="Instagram" style="max-width: 35px;" />
                    </a>
                </li>
                <li style="margin-right: 10px;">
                    <a href="" target="_blank">
                        <img src="https://mdbgo.io/dawidadach/responsiveemail/img/tw-color.png" alt="Twitter" style="max-width: 35px;" />
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <img src="https://mdbgo.io/dawidadach/responsiveemail/img/yt-color.png" alt="YouTube" style="max-width: 35px;" />
                    </a>
                </li>
            </ul>
        </header>

        <div id="banner" style="padding: 0 3%;">
            <h3 style="margin: 0;">Dear {{ $mailData['name'] }}</h3>
        </div>

        <div style="padding: 20px 3%;">
            <p style="margin: 0 0 10px 0; color: #000;">
                Thank you for your order! We are writing to inform you about the payment resolution for your order. Below are the updated details:
            </p>
            <p style="margin: 0 0 10px 0; color: #000;">
                <strong>Order Reference:</strong> {{ $mailData['order_reference'] }}<br>
                <strong>Payment Status:</strong> <span style="font-weight: bold; color: #303840;">{{ $mailData['payment_status'] }}</span><br>
            </p>
            <p style="margin: 0 0 20px 0; color: #000;">
                If further assistance is required, or if you have any concerns, please reach out to our support team.
            </p>
            <a href="https://obidiyasapphire.com/contact" style="display: inline-block; background-color: #303840; color: #f6faff; text-decoration: none; font-weight: 800; padding: 8px 12px; border-radius: 8px; letter-spacing: 2px;">Contact Us</a>
        </div>

        <hr style="height: 1px; background-color: #303840; border: none; width: 94%; margin: 20px auto;" />

        <footer style="text-align: center; padding: 0 0 20px 0;">
            <p style="margin: 0; font-size: 12px; color: #303840; line-height: 1.5;">
                Best regards, <br />
                ObidiyaSapphireEnterprises
            </p>
        </footer>
    </div>
    </body>

@else
    <body style="font-family: 'Raleway', sans-serif; background-color:#e3eaea ; font-size: 14px; max-width: 800px; margin: 0 auto; padding: 3%;">
    <div id="wrapper" style="background-color: #f0f6fb;">
        <header style="width: 98%; display: flex; justify-content: space-between; align-items: center; padding: 3%;">
            <div id="logo" style="max-width: 120px;">
                <img src="https://obidiyasapphire.com/frontend_new/assets/images/logo2.png" alt="Logo" style="max-width: 100%;" />
            </div>
            <ul id="social" style="list-style-type: none; padding: 0; margin: 0; display: flex;">
                <li style="margin-right: 10px;">
                    <a href="" target="_blank">
                        <img src="https://mdbgo.io/dawidadach/responsiveemail/img/in-color.png" alt="Instagram" style="max-width: 35px;" />
                    </a>
                </li>
                <li style="margin-right: 10px;">
                    <a href="" target="_blank">
                        <img src="https://mdbgo.io/dawidadach/responsiveemail/img/tw-color.png" alt="Twitter" style="max-width: 35px;" />
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <img src="https://mdbgo.io/dawidadach/responsiveemail/img/yt-color.png" alt="YouTube" style="max-width: 35px;" />
                    </a>
                </li>
            </ul>
        </header>

        <div id="banner" style="padding: 0 3%;">
            <h3 style="margin: 0;">Dear {{ $mailData['name'] }}</h3>
        </div>

        <div style="padding: 20px 3%;">
            <p style="margin: 0 0 10px 0; color: #000;">
                Thank you for your order! We are delighted to confirm your order. Below are the details:
            </p>
            <p style="margin: 0 0 10px 0; color: #000;">
                <strong>Order Reference:</strong> {{ $mailData['order_reference'] }}<br>
                <strong>Status:</strong> <span style="font-weight: bold; color: #303840;">{{ $mailData['status'] }}</span><br>
            </p>
            <p style="margin: 0 0 20px 0; color: #000;">
                If you have any questions or require assistance with your order, please do not hesitate to contact us.
            </p>
            <a href="https://obidiyasapphire.com/contact" style="display: inline-block; background-color: #303840; color: #f6faff; text-decoration: none; font-weight: 800; padding: 8px 12px; border-radius: 8px; letter-spacing: 2px;">Contact Us</a>
        </div>

        <hr style="height: 1px; background-color: #303840; border: none; width: 94%; margin: 20px auto;" />

        <footer style="text-align: center; padding: 0 0 20px 0;">
            <p style="margin: 0; font-size: 12px; color: #303840; line-height: 1.5;">
                Best regards, <br />
                ObidiyaSapphireEnterprises
            </p>
        </footer>
    </div>
    </body>

@endif
</html>
