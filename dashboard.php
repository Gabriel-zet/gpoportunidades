<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-dashboard.css">
    <title>Home</title>
    <link rel="shortcut icon" href="images/dashboard.png" type="image/x-icon">
</head>
<body>
<?php     include_once('auth.php'); ?>


    <section>

        <div class="linha-centro">

        <div class="lado-01">
            <div class="logo-home-dash">
                <span>Girau de Oportunidades</span>
            </div>
    
            <div class="box-navegation-left">
                <nav>
                    <ul>
                        <li>Home</li>
                        <li>Lista de participantes</li>
                        <li>Cursos</li>
                        <li>Cadastros</li>
                    </ul>
                </nav>
            </div>
        </div>
        
        <div class="lado-02">

        <div class="line-widdgets-dashboard line-flex color-white-card">

            <div class="time-hora-data-dashboard card-center-align">
                <div class="hora-time-set regular-font-db">
                    <span>17:00</span>
                </div>
                <div class="data-time-set light-font-db">
                    <span>Sexta, Junho 16, 23</span>
                </div>
            </div>

            <div class="inscricoes-tempo-dashboard card-center-align">
                <div class="text-fim-inscricoes light-font-db">
                    <span>As inscrições acabam em:</span>
                </div>
                <div class="tempo-data-dash line-flex">
                    <div class="data-dias-fim regular-font-db">
                        <span>103 Dias</span>
                    </div>
                    <div class="datas-inicio-e-fim-set">
                        <div class="inicio-data">
                            <span class="light-font-db">Início</span>
                            <span class="regular-font-db">18/09/23</span>
                        </div>
                        <div class="fim-data">
                            <span class="light-font-db">Fim</span>
                            <span class="regular-font-db">20/10/23</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="total-inscricoes-dashboard card-center-align width-card">
                <div class="total-insc-num">
                    <span class="light-font-db">Total de Inscrições</span>
                    <span class="regular-font-db total-number-name">1.230</span>
                </div>
                <div class="today-insc-num">
                    <span class="light-font-db">Hoje</span>
                    <span class="regular-font-db day-size-name">12</span>
                </div>
            </div>
        </div>

        <div class="box-table-right">
            <div class="category-area-dashboard-results line-flex-category">
                <div class="name-class-order ordem-category-pd">
                    <select id="ordem-nome" name="ordem-nome" class="nome-ordem-tabela">
                        <option value="Ordem Aflabética">Nome A-Z</option>
                        <option value="todos-ordem">Todos</option>
                    </select>
                </div>
                <div class="ocupacao-curso-ordem ordem-category-pd">
                    <select id="curso-ocupado" name="curso-ocupado" class="curso-ocupado-ordem">
                        <option value="curso-ordem">Todos</option>
                        <option value="curso-backend">Curso Backend</option>
                        <option value="curso-frontend">Curso Frontend</option>
                        <option value="curso-design">Curso Design</option>
                        <option value="curso-Costura">Curso Costura</option>
                    </select>
                </div>
                <div class="consultar-por-cpf ordem-category-pd">
                    <input class="light-font-db" type="text" placeholder="Cpf:">
                </div>
            </div>
    
            <div class="table-resultados-cadastos line-flex-category">
    <table>
        <tr class="regular-font-db">
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Cpf</th>
        </tr>
        <?php
        $sql = "SELECT * FROM inscritos";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Erro na consulta: " . mysqli_error($conn));
        }

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr class='light-font-db'>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['cpf'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
        </div>
    </div>
</div>
    </section>
    
</body>
</html>