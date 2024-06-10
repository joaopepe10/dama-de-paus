<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuleiro de Damas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table>
        <tr>
            <td>
                <div id="jogador1">JOGADOR UM</div>
            </td>
            <td>
                <div style="text-align: center">
                    <div style="">
                        <h1><spam style="color: black">Damas d</spam><spam style="color: red">e Paus</spam></h1>
                    </div>                            
                </div>
                <div style="text-align: center;">
                    <button id="inicia" onclick="jogo.mudaJogador()">INICIAR JOGO</button>
                    <div id="tabuleiro"></div>
                </div>
            </td>
            <td>
                <div id="jogador2">JOGADOR DOIS</div>
            </td>
        </tr>
    </table>
</body>

<script type="text/javascript" src="scripts.js"></script>
<script type="text/javascript" src="horario.js"></script>
</html>
