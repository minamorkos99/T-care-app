<form action="{{url('adddoctor')}}" method="post">
    @csrf
<input type="text" name="id" placeholder="id">
<input type="text" name="name" placeholder="name">
<input type="text" name="specialist" placeholder="specialist" >
<input type="text" name="phone" placeholder="phone" >



<input type="submit" value="add">
</form>