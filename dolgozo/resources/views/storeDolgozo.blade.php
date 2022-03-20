<h1>Tölts ki a mezőket</h1>
 
@if( session()->has( "success "))
    <h3>{{ session( "success" ) }}</h3>
@endif
 
<form action="tarol-tanulo" method="post">
    @csrf
    <p>
        <label for=""> Név: </label>
        <input type="text" name="name">
        <br>
    </p>
    <p>
        <label for=""> Email: </label>
        <input type="text" name="email">
        <br>
    </p>
    <p>
        <label for=""> Telefon: </label>
        <input type="text" name="phone">
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>