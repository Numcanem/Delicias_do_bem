
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario</title>
<style>
body{
font-family: Arial, Helvetica, sans-serif;
background-color: #fbb5bf;
        color: white;
}
.box{
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
background-color: rgba(0, 0, 0, 0.8);
padding: 15px;
border-radius: 15px;
width: 25%;
color: #fff;
}
fieldset{
border: 3px solid dodgerblue;
}
legend{
border: 1px solid dodgerblue;
padding: 5px;
text-align: center;
background-color: dodgerblue;
border-radius: 5px;
}
.inputBox{
position: relative;
}
.inputUser{
background: none;
border: none;
border-bottom: 1px solid white;
outline: none;
color: white;
font-size: 10px;
width: 100%;
letter-spacing: 2px;
}
.labelInput{
position: absolute;
top: 0px;
left: 0px;
pointer-events: none;
transition: .5s;
}
.inputUser:focus ~ .labelInput,
.inputUser:valid ~ .labelInput{
top: -20px;
font-size: 12px;
color:  dodgerblue;
}
#data_nascimento{
border: none;
padding: 8px;
border-redius: 10px;
outline: none;
fort-size: 15px;
}
#submit{
background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
width: 100%;
border: none;
padding: 15px;
color: white;
fort-size: 15px;
cursor: pointer;
border-redius: 10px;
}
#submit:hover{
background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(50, 19, 190));
}
.fa-google {
            background-color:#FF0000;
            border: none;
            padding: 12px;
            width: 50%;
            border-radius: 10px;
             color: #fff;
             cursor: pointer;
        }
        .fa-google:hover{
            background-color: #FA8072;
        }

        .btn-facebook{
            padding: 10px;
            border:none ;
            outline: none;
        }

        .fa-facebook {
            background-color:#800000;
            border: none;
            padding: 12px;
            width: 50%;
            border-radius: 10px;
             color: #fff;
             cursor: pointer;
        }
        .fa-facebook:hover{
            background-color: #FF6347;
        }
a{ 
    color: #fff;
    text-decoration: nome;
 }
</style>
</head>
<body background="img/client-bg.png">
     <font face="georgia"><a href="index.php"><strong>Voltar</strong></a></font>
<div class="box">
<form method="POST" action="pi.php">
<fieldset>
<legend><br>Fórmulario de Clientes</br></legend>
<br>
<div class="inputBox">
<input type="text" name="nome" id="nome" class="inputUser" required>
<label  for="nome" class="labelInput">Nome completo</label>
</div>
<br><br>
   <div class="inputBox">
<input type="password" name="senha" id="senha"class="inputUser" required>
<label  for="senha" class="labelInput">Senha</label>
<br><br>
<div class="inputBox">
<input type="text"name="email" id="email" class="inputUser" required>
<label for="email" class="labelInput">Email</label>
</div>
<br><br>
<div class="inputBox">
<input type="tel"name="telefone" id="telefone" class="inputUser" required>
<label for="telefone" class="labelInput">Telefone</label>
</div>
<br>
<p>Sexo:</p>
<input type="radio" id="feminino" name="genero" value="feminino" required>
<label for="feminino">Feminino</label>
<br>
<input type="radio" id="masculino" name="genero" value="masculino" required>
<label for="feminino">Masculino</label>
<br>
<input type="radio" id="outro" name="genero" value="outro" required>
<label for="outo">Outro</label>
<br>

<label for="data_nascimento"><br>Data de Nascimento:</label>
<input type="date" name="data" id="data_nascimento"  required >

<br><br>
<div class="inputBox">
<input type="text" name="cidade" id="cidade" class="inputUser" required >
<label for="cidade" class="labelInput">Cidade</label>
</div>
<br><br>
<div class="inputBox">
<input type="text" name="estado" id="estado" class="inputUser" required >
<label for="estado" class="labelInput">Estado</label>
</div>
<br><br>
<div class="inputBox">
<input type="text" name="endereco" id="endereco" class="inputUser" required >
<label for="endereco" class="labelInput">Endereço</label>
</div>
<br><br>
<input type="submit" name="submit" id="submit">
</fieldset>
 <hr>
                               
</form>
<div class="text-center">
<a class="small" href="login.php">já tem uma conta? Conecte-se!</a>
</div>
</body>
</html>