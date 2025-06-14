<html lang="en-US">
    <head>
    	<meta charset="utf-8">
    </head>
    <body>
        <h3>Service Request</h3>
		<p>Dear Admin,<br>
			You have received a service request from the website. <br>
            Kindly find below details:<br><br>
            <ul>
                <li>Name: {{$data['name']}} </li>
                <li>Mobile: {{$data['mobile_number']}}</li>
                <li>Email: {{$data['email']}}</li>
                <li>Subject: {{$data['subject']}}</li>
                <li>Message: {{$data['message']}}</li>
            </ul>			
		<br>
    </body>
</html>