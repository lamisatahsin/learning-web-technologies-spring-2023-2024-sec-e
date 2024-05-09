<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            font-size: larger;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .profile {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
        }

        .profile img {
            width: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .profile button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-right: 10px;
        }

        .transaction-details {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
        }

        .transaction-details table {
            width: 100%;
            border-collapse: collapse;
        }

        .transaction-details th,
        .transaction-details td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .transaction-details th {
            background-color: #007bff;
            color: #fff;
        }

        .faq {
            background-color: #fff;
            padding: 30px;
            margin-bottom: 20px;
        }

        .faq details {
            margin-bottom: 10px;
        }

        .faq summary {
            font-weight: bold;
            cursor: pointer;
        }

        .faq p {
            margin-top: 5px;
            margin-bottom: 0;
        }

        .volunteer-opportunities {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
        }

        .volunteer-opportunities button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-right: 10px;
        }

        .sponsors {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
        }

        .sponsors h2{
            text-align: center;
        }

        .sponsors img {
            width: 100px;
            margin-right: 10px;
        }

    </style>
</head>

<body>
    <header>
        <h1>Charity & Donation</h1>
    </header>

    <nav>
        <a href="#">Home</a>|
        <a href="/charity/login.php">Login</a>|
        <a href="/charity/signup.php">Signup</a>|
        <a href="#">About</a>|
        <a href="#">Donate</a>|
        <a href="#">Contact</a>
    </nav>

    <div class="container">

    <fieldset>
        <legend>
            <h2>FAQ</h2>
        </legend>

        <details>
            <summary>How can I donate to your charity?</summary>
            <p>You can donate to our charity through our website using credit/debit cards, PayPal, or bank transfer.
                Additionally, you can also donate in person at our office or through specific fundraising events.</p>
        </details>

        <details>
            <summary>What types of donations do you accept?</summary>
            <p>We accept various types of donations including monetary donations, in-kind donations (such as clothing,
                food, and supplies), as well as donations of time through volunteering.</p>
        </details>

        <details>
            <summary>How do I know my donation is being used effectively?</summary>
            <p>We are committed to transparency and accountability. We regularly publish financial reports detailing how
                donations are allocated and used to support our programs and initiatives. You can also contact us
                directly for more information.</p>
        </details>

        <details>
            <summary>Can I donate on behalf of someone else?</summary>
            <p>Yes, you can donate on behalf of someone else. During the donation process, you will have the option to
                specify if the donation is in honor or memory of someone, and we can send acknowledgment to them or
                their family if requested.</p>
        </details>

        <details>
            <summary>Do you provide tax receipts for donations?</summary>
            <p>Yes, we provide tax-deductible receipts for all eligible donations. Make sure to provide accurate
                information during the donation process to receive your tax receipt.</p>
        </details>

        <details>
            <summary>Do you accept donations from outside the country?</summary>
            <p>Yes, we welcome donations from individuals and organizations worldwide. However, please note that
                international donations may be subject to additional processing fees and tax implications depending on
                your country's regulations.</p>
        </details>

        <details>
            <summary>Can I specify how my donation is used?</summary>
            <p>Absolutely! During the donation process, you can often choose to allocate your donation to a specific
                program, project, or initiative within our organization. If you have a specific preference, please make
                sure to indicate it when making your donation.</p>
        </details>

        <details>
            <summary>Are there any volunteer opportunities available?</summary>
            <p>Yes, we offer a variety of volunteer opportunities for individuals interested in supporting our cause.
                These opportunities may include administrative tasks, event coordination, fundraising, and direct
                involvement in our programs. Please visit our volunteer page or contact us for more information on
                current opportunities.</p>
        </details>

        <details>
            <summary>How can I get involved in fundraising events?</summary>
            <p>We regularly organize fundraising events to support our initiatives. You can participate in these events
                by attending, volunteering, or even organizing your own fundraising campaign on our behalf. Keep an eye
                on our website and social media channels for updates on upcoming events and campaigns.</p>
        </details>

        <details>
            <summary>What measures do you take to ensure the security of online donations?</summary>
            <p>We prioritize the security and confidentiality of online donations. Our website utilizes
                industry-standard encryption and security protocols to safeguard your personal and financial
                information. Additionally, we partner with reputable payment processors to process online transactions
                securely. If you have any concerns about online donations, please don't hesitate to contact us.</p>
        </details>
    </fieldset>

        
        <div class="volunteer-opportunities">
            <h2>Volunteer Opportunities</h2>
            <button>Registration for Event</button>
            <button>Share</button>
            <button>Collaboration</button>
        </div>

        <div class="sponsors">
            <h2>Sponsors</h2>
            <div style="display: flex; align-items: center; gap: 30px;">
                <img src="/charity/assets/3NBC.webp" alt="Company Image">
                <img src="/charity/assets/bmw.png" alt="Company Image">
                <img src="/charity/assets/amazon.png" alt="Company Image">
                <img src="/charity/assets/hyundai.png" alt="Company Image">
                <img src="/charity/assets/nike.png" alt="Company Image">
                <img src="/charity/assets/mcdonalds.png" alt="Company Image">
            </div>
        </div>

    </div>
</body>

</html>
