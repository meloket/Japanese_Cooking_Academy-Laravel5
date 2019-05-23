<div>
<b>ENTRY ID - {{ $entry }}</b><br>

<b>BASIC INFORMATION</b>
<hr>
First Name : {{ $b_firstname }}<br>
Middle Name : {{ $b_midname }}<br>
Last Name : {{ $b_lastname}}<br>
Birthday : {{ $b_birthday }}<br>
Gender : {{ $b_gender }}<br>
Nationality : {{ $b_nation }}<br>
Country of residence : {{ $b_country }}<br>


<br>
<b>CONTACT INFORMATION (Private)</b>
<hr>
Home address : <br>
{{ $cp_street }}<br>
{{ $cp_street2 }}<br>
{{ $cp_city }}<br>
{{ $cp_state }}<br>
{{ $cp_country }}<br>
{{ $cp_postal }}<br><br>
Email address : {{ $cp_email }}<br>
Contact number : {{ $cp_mobile }}<br><br>


<b>CONTACT INFORMATION (Work)</b>
<hr>
Company name : {{ $cw_company }}<br>
Company address : <br>
{{ $cw_street }}<br>
{{ $cw_street2 }}<br>
{{ $cw_city }}<br>
{{ $cw_state }}<br>
{{ $cw_country }}<br>
{{ $cw_postal }}<br><br>

Office email address : {{ $cw_email }}<br>
Office number : {{ $cw_phone }}<br>
Cooking experience : {{ $cw_experience }}<br><br>



<b>CONTACT METHOD</b>
<hr>
Please specify which email address would you like us to use : <br>
{{ $cm_email }}<br>

Please specify which address any documents should be sent to : <br>
{{ $cm_address }}<br><br>

<b>OTHERS</b>
<hr>
Venue : {{ $oth_venue }}<br>
How did you hear about 'Japanese Culinary Arts Competition'? : <br>
{{ $oth_recipe }}<br>
{{ $oth_website }}<br>
{{ $oth_dm }}<br>
{{ $oth_poster }}<br>
{{ $oth_newsletter }}<br>
{{ $oth_facebook }}<br>
{{ $oth_friend }}<br>
{{ $oth_competition }}<br><br>

<hr>
Chosen the method of sending a recipe and pictures : <br>
{{ $oth_other }}<br>
</div>
