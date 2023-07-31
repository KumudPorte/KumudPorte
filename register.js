if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
  var commands = {
    'write Username *tag': function(variable){
        let uname = document.getElementById("uname");
        uname.value = variable;
    },

    'write Password *tag': function(variable){
        let password = document.getElementById("password");
        password.value = variable.split(" ").join("");
    },

	'write branch *tag': function(variable){
        let branch = document.getElementById("branch");
        branch.value = variable;
    },

	'write mobile number *tag': function(variable){
        let mobno = document.getElementById("mobno");
        mobno.value = variable;
    },

	'write address *tag': function(variable){
        let address = document.getElementById("address");
        address.value = variable;
    },
    'Home': function(variable){
        window.location.href="home.php";
    },
    'Login': function(variable){
        window.location.href="login.php";

    },

	'choose an image *tag': function(variable){
        let image = document.getElementById("image");
        image.value = variable;
    }
  };

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening. You can call this here, or attach this call to an event, button, etc.
  annyang.start();
}