  CREATE TABLE `produto` (
    `id` int(11) NOT NULL,
    `nome` varchar(255) NOT NULL,
    `texto` varchar(255) NOT NULL,
    `valor` varchar(255) NOT NULL,
    `image` varchar(255) NOT NULL,
    `link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

INSERT INTO `produto` (`id`, `nome`, `texto`, `valor`, `image`, `link`) VALUES
(1, 'Air Force', 'Modelo Flash Point, Acabamento revestido de azul e bordas de ouro', '890.99', 'https://images.lojanike.com.br/500x500/produto/tenis-nike-air-force-270-qs-purple-masculino-AQ1000-500-1.png', 'https://www.nike.com.br/tenis-nike-air-force-270-qs-purple-masculino-153-169-172-34866'),
(2, 'Tênis Nike', 'Modelo Flash Point, Acabamento revestido de azul e bordas de ouro', '250.00', 'http://localhost/Pagina%20de%20Venda/assets/images/product/product1.webp', 'http://tenisnike.com.br/'),
(3, 'Air Jordan 1', 'Modelo Flash Point, Acabamento revestido de azul e bordas de ouro', '149.50', 'https://cdn.shopify.com/s/files/1/0554/4552/0554/products/6a090196-removebg-preview_1106x.png', 'https://inventalle.com/products/air-jordan-tenis-nike-unissex-lancamento'),
(4, 'Yellow Force', 'Modelo Flash Point, Acabamento revestido de azul e bordas de ouro', '39.99', 'https://photos.enjoei.com.br/tenis-nike-presto-amarelo-39036325/1200xN/czM6Ly9waG90b3MuZW5qb2VpLmNvbS5ici9wcm9kdWN0cy8xMjE1OTQxOS8xMjI3MzI1NGNhZTIwMzMxNWIwN2QzNzg4M2I5OWI4OC5qcGc', 'https://www.enjoei.com.br/p/tenis-nike-presto-amarelo-39036325');


  CREATE TABLE `usuario` (
    `id` int(11) NOT NULL,
    `nome` varchar(255) NOT NULL,
    `usuario` varchar(255) NOT NULL,
    `senha` varchar(255) NOT NULL,
    `nivel` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;



INSERT INTO `usuario` (`nome`, `usuario`, `senha`, `nivel`) VALUES
('Administrador', 'admin', 'admin', 1);




