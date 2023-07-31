if (annyang) {
    // Let's define our first command. First the text we expect, and then the function it should call
    var commands = {
      'write email *tag': function(variable){
          let mail = document.getElementById("mail");
          mail.value = variable;
      },
  
      'write subject *tag': function(variable){
          let subject = document.getElementById("subject");
          subject.value = variable;
      },
  
      'write Description *tag': function(variable){
          let description = document.getElementById("description");
          description.value = variable;
      },
      'write message *tag': function(variable){
          let To = document.getElementById("To");
          To.value = variable;
      },
      'open inbox': function(variable){
        window.location.href="inbox.php";
    },
    'open chat': function(variable){
        window.location.href="ChatApp/login.php";
    },

    'logout': function(variable){
        window.location.href="login.php";
    },
    'open feedback': function(variable){
        window.location.href="feedback.php";
    },
      'send': function(variable){
         document.getElementById('send').click();
      }
  
    };
  
    // Add our commands to annyang
    annyang.addCommands(commands);
  
    // Start listening. You can call this here, or attach this call to an event, button, etc.
    annyang.start();
  }