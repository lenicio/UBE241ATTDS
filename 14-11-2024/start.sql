CREATE DATABASE IF NOT EXISTS nothycias;
USE nothycias;

CREATE TABLE noticias(
id INT AUTO_INCREMENT,
titulo VARCHAR(200) NOT NULL UNIQUE,
descricao TEXT NOT NULL,
data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
);

INSERT INTO noticias (titulo, descricao) VALUES
("Rato é promovido no trabalho", "Mickey comenta estar devéras surpreso com sua promoção na disney, a aguarda anciosamente por crossover com Thor."),
("Pinguim decide migrar para o Brasil", "Após anos de frio na Antártida, pinguim afirma estar 'pronto para calor e caipirinha' e já planeja passeio em Copacabana."),
("Gato se matricula em curso de yoga", "Felino afirma que finalmente encontrou seu propósito e promete virar instrutor para ensinar humanos a relaxar como ele."),
("Árvore ganha concurso de beleza", "Com folhas impecáveis e um tronco 'de respeito', árvore do Central Park é nomeada 'Miss Floresta 2024'."),
("Golfinho aprende a usar smartphone", "Cientistas ficam impressionados com golfinho que agora assiste vídeos de pesca no TikTok e atualiza seu próprio Instagram."),
("Cachorro se candidata a prefeito", "Em pequena cidade do interior, cão carismático promete 'passeios diários e petiscos para todos'. População parece estar levando campanha a sério."),
("Drone se torna amigo de papagaio", "Drone de vigilância se aproxima de papagaio em parque e dupla agora é inseparável, trocando piadas e voando juntos pelo bairro."),
("Aranha abre canal de culinária", "Aracnídeo com gosto peculiar para insetos ensina receitas exclusivas de moscas fritas e larvas ao molho."),
("Robô vira celebridade no Instagram", "Após vídeos virais de sua dança robótica, humanoides de todo o mundo agora o seguem em busca de dicas de 'swag eletrônico'."),
("Formigas criam time de futebol", "Formigueiro se organiza e monta time 'Os Formigões', prometendo desafiar qualquer colônia rival para campeonato de verão."),
("Porco-espinho abre spa para relaxamento", "Especializado em massagens e terapia de espinhos, o spa recebe clientes de todo o reino animal buscando alívio para o estresse."),
("Pato é visto fazendo compras em supermercado", "Clientes se surpreendem ao ver pato passeando tranquilamente pelos corredores, analisando promoções e escolhendo produtos."),
("Pombo faz tatuagem", "Após anos nas ruas, pombo tatuado é visto como o mais 'cool' da praça, com novo desenho de uma migalha no peito."),
("Cachorro encontra tesouro em quintal", "Em escavação casual, cão descobre baú com brinquedos e biscoitos enterrados, agora considerado herói local.");

SELECT * FROM noticias;