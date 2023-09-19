<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_participantes']);

    $query = "DELETE FROM students WHERE id='$participantes_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Candidato excluido com sucesso";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Não foi possivel excluir o Candidato";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_participantes']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['participantes_id']);

    $name = mysqli_real_escape_string($con, $_POST['nome']);
    $email = mysqli_real_escape_string($con, $_POST['documento']);
    $phone = mysqli_real_escape_string($con, $_POST['unidade']);
    $course = mysqli_real_escape_string($con, $_POST['prova']);

    $query = "UPDATE participantes SET nome='$nome', documento='$documento', unidade='$unidade', prova='$prova' WHERE id='$participantes_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Aluno atualizado com sucesso";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Aluno não atualizado";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_participantes']))
{
    $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $documento = mysqli_real_escape_string($con, $_POST['documento']);
    $unidade = mysqli_real_escape_string($con, $_POST['unidade']);
   
    $prova = mysqli_real_escape_string($con, $_POST['prova']);

    $query = "INSERT INTO participantes (nome,documento,unidade,prova) VALUES ('$nome','$documento','$unidade','$prova')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Participante cadastrado com sucesso!";
        header("Location: consultaParticipantes.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Participante não cadastrado";
        header("Location: consultaParticipantes.php");
        exit(0);
    }
}

?>