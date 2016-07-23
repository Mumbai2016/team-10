<body>
    <form name="myform">
         First_Name
         <input type=text id=fname name=fname onblur="validate()" /><span id="errfn"></span>
        <br> <br>
         Last_Name
         <input type=text id=lname name=lname onblur="validate()"/><br>
         <input type=button value=check /> 
    </form>
</body>