@php
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Vite;
$response = file_get_contents("https://randomuser.me/api");
/*echo $response;*/
$data =json_decode($response, true);
/*var_dump($data);*/
echo $data["results"][0]["name"]["first"], "\n", $data["results"][0]["login"]["username"], "\n";






@endphp


<form method="POST" action="/profile">
    @csrf



    <!-- Equivalent to... -->
	<input type="text" name="name" value="text" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
	<?php $dt = new DateTime(); echo $dt->format('Y-m-d H:i:s') ?>
</form>