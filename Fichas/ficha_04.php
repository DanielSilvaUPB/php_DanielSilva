<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
</head>
<body>
    <form action=results.php method="post">
        <label>Nome:</label>
        <input  type="text" name="nome"><br>
        <label>Apelido:</label>
        <input type="text" name="apelido"> <br>
        <label>Aluno do CTESP de Informática?</label>
        <input type="checkbox" name="aluno" checked> <br>
        <label>Idade:</label> <br>
        <input type="radio" name="idade" value="menor ou igual que 20"> <=20 <br>
        <input type="radio" name="idade" value="entre 21 e 30"> >21-30 <br>
        <input type="radio" name="idade" value="de 31 e 40"> >31-40 <br>
        <input type="radio" name="idade" value="maior que 40"> >40 <br>
        <label>Localidade:</label>
        <select name="localidade">
            <option value="Chaves">Chaves</option>
            <option value="Lisboa">Lisboa</option>
            <option value="Porto">Porto</option>
            <option value="Coimbra">Coimbra</option>
            <option value="Faro">Faro</option>
        </select> <br>
        <label>Sugestões:</label>
        <textarea name="sugestoes" rows="5" cols="30"></textarea> <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>