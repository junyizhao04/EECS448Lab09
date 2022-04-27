document.addEventListener("DOMContentLoaded",() =>
{
    document.querySelector("#submit").addEventListener("click",(e) =>
    {
        //variables
        let chiQuantity = document.getElementById('chicken');
        let duckQuantity = document.getElementById('duck');
        let gooseQuantity = document.getElementById('goose');
        let email = document.getElementById('username');
        let password = document.getElementById('password');
        let free = document.getElementById('free');
        let exp = document.getElementById('50');
        let thrDay = document.getElementById('5');

        //validations
        if (chiQuantity.value == "" && duckQuantity.value == "" && gooseQuantity.value == "")
        {
            alert("You must buy something to proceed!");
            e.preventDefault();
        }
        if (!checkEmail(email.value))
        {
            alert("That is not a valid email, make sure to include @example.com on the end!");
            e.preventDefault();
        }
        if(password.value.length == 0)
        {
            alert("You must include a password!");
            e.preventDefault();
        }
        if (free.checked == false && exp.checked == false && thrDay.checked == false)
        {
            alert("You must select a shipping option!");
            e.preventDefault();
        }
    });

    //function to check email
    function checkEmail(email)
    {   
        let passed = false;
        for (let i = 0; i < email.length; ++i)
        {
            console.log(email[i]);
            console.log("length: " + email.length);
            if (email[i] == "@" && i != 0 && i != email.length-1)
            {
                console.log("when true:" + i);
                passed = true;
            }
        }
        return passed;
    }
});