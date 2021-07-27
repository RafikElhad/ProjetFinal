<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Payment form example</title> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 

    <link rel="stylesheet" href="css/styles.css">   
</head>

<body>
    <form method="post">   
        <h1>Payment form</h1>
        <p>Required fields are followed by <strong><abbr title="required">*</abbr></strong>.</p>
        <section>
            <h2  class="contact">Contact information</h2>                
            <fieldset>
              <legend>Title</legend>
              <ul>
                  <li>
                    <label for="title_1">
                      <input type="radio" id="title_1" name="title" value="A">
                      Ace
                    </label>
                  </li>
                  <li>
                    <label for="title_2">
                      <input type="radio" id="title_2" name="title" value="K" >
                      King
                    </label>
                  </li>
                  <li>
                    <label for="title_3">
                      <input type="radio" id="title_3" name="title" value="Q">
                      Queen
                    </label>
                  </li>
              </ul>
            </fieldset>
            <p>
              <label for="name">
                <span>Name: </span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="name" name="username">
            </p>
            <p>
              <label for="mail">
                <span>E-mail: </span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="email" id="mail" name="usermail">
            </p>
            <p>
              <label for="pwd">
                <span>Password: </span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="password" id="pwd" name="password">
            </p>
        </section>
        <section>
            <h2>Payment information</h2> 
            <p>
              <label for="number">
                <span>Confirmer votre choix:</span>  
                <strong><abbr title="required">*</abbr></strong> 
              </label>
                <input type="text" id="choix" name="votre choix">   
            </p>
            <p>
              <label for="card">
                <span>Card type:</span>
              </label>
              <select id="card" name="usercard">
                <option value="visa">Visa</option>
                <option value="mc">Mastercard</option>
              </select>
            </p>
            <p>
              <label for="number">
                <span>Card number:</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
                <input type="tel" id="number" name="cardnumber">
            </p>
            <p>
              <label for="date">
                <span>Expiration date:</span>
                <strong><abbr title="required">*</abbr></strong>
                <em>formatted as mm/dd/yyyy</em>
              </label>
              <input type="date" id="date" name="expiration">       
            </p> 
        </section>
        <section>
        <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-pencil"></span> valide</a>      
        </section>       
    </form>
</body>

</html>