# Craps
Implementação do jogo Craps

A empresa webGames, especializada em desenvolver jogos para navegador, foi contratada por um cassino para incluir um novo jogo em sua plataform on-line, o Craps.
Depois de uma longa entrevista com os donos do cassino, chegou-se a um conseso que as regras do jogo são as descritas a baixo:

"Um jagador rola dois dados. Cada dado tem seis faces. Essas faces contêm 1, 2 , 3, 4, 5 e 6 pontos. Depois que os dados param de rolar, a soma dos pontos nas faces viradas para 
cima é calculada. Se a soma é 7 ou 11 na primeira rolagem dos dados, o jogador ganha. Se a soma é 2, 3 ou 12 na primeira rolagem dos dados (chamado Craps), o jogador perde (isto é,
a 'casa' ganha). Se a soma for 4, 5, 6, 8, 9 ou 10 na primeira rolagem dos dados, essa soma torna-se a pontuação do jogador. Para ganhar, você deve continuar a lançar 
os dados até 'fazer sua pontuação '. Ojogador perde se tirar um 7 antes de fazer sua pontuação."

Com o script em PHP do jogo finalizado, você foi contratado pela webGames para escrever uma rotina de testes para o programa em questão

Desafio 1: Escreva um teste para verificar se o dado está retornando valores no range correto
Desafio 2: Escreva um teste para verificar se as regras na função round1 estão sendo aplicadas corretamente
Desafio 3: escreva um teste para verificar se as regras na função round2 estão sendo aplicadas corretamente
Desafio 4: Escreva um teste para verificar se as somas das pontuações estão retornando valores adequados. (Fique a vontade para refatorar o código se for preciso)
Desafio 5: Utilize fixtures (setUP(), tearDown(), setUpBeforeClass(), tearDownAfterClass()) para inicializar e finalizar as dependencias dos testes adequadamente
Desafio 5: Escreva funções para geração de dados para os seus testes.