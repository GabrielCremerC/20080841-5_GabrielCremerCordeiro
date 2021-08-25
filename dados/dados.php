<?php
	$quem_somos = array(
		'empresa' =>'Doces A Gosto',
		'photo'=>'logo.png',
		'ramo' => 'Doces',
        'endereco' => 'São Paulo, Rua das laranjas 122',
        'email' => 'DocesAGosto@gmail.com',
        'telefone'=>'123456788'
	);

	$produtos = array(
		0 => array('id'=>1, 'title'=> 'Doce de Abóbora', 'description' => "Aquele doce que combina com tudo? esse é o escolhido.", 'foto' => './images/doce-de-abobora.jpg'),
		1 => array('id'=>2, 'title'=> 'Doce de Goiaba', 'description' =>  "Doce de goiaba", 'foto' => './images/doce-de-goiaba.jpg' ),
		2 => array('id'=>3,  'title'=> 'Doce de mamão', 'description' => "Doce de mamão verde ralado com especiarias", 'foto' => './images/doce-de-mamao.jpg'),
        3 => array('id'=>3,  'title'=> 'Pasta de amendoim', 'description' => "Ja viu em algum lugar esse nome e ja quis comer? agora é sua chance!.", 'foto' => './images/pasta-de-amendoim.jpg')
    );

	$doces_descricao = array(
		0 => array(
            'title' => 'Doce de Abóbora', 
			'description' => 'Uma receita tradicional, porem muito bem vinda no nosso dia a dia e totalmente saudavel',
			'ingrediente' => 'abóbora, cenela e açucar',
            'embalagem' => 'Pote de 400g',
			'calorias' => '423 kcal',
			'preco' => 'R$25,00'
        ),
		1 => array(
            'title' => 'Doce de Goiaba', 
			'description' => 'São apenas três ingrediente nessa receita maravilhosa, água, goiabas frescas selecionadas e açucar. Sem adição de conservantes ou produtos químicos. Não contém glutem e lactose',
			'ingrediente' => 'água, goiaba e açucar',
			'embalagem' => 'Pote de 400g',
			'calorias' => '207 kcal',
			'preco' => 'R$24,50'
        ),
		2 => array(
            'title' => 'Doce de mamão', 
			'description' => 'São apenas três ingrediente nessa receita maravilhosa, água, goiabas frescas selecionadas e açucar. Sem adição de conservantes ou produtos químicos. Não contém glutem e lactose',
			'ingrediente' => 'água, mamão verde e açucar',
			'embalagem' => 'Pote de 400g',
			'calorias' => '267 kcal',
			'preco' => 'R$25,00'
        ),
		3 => array(
            'title' => 'Pasta de Amendoim', 
			'description' => 'São apenas três ingrediente nessa receita maravilhosa, água, goiabas frescas selecionadas e açucar. Sem adição de conservantes ou produtos químicos. Não contém glutem e lactose.',
			'ingrediente' => 'amendoim e açucar',
			'embalagem' => 'Pote de 500g',
			'calorias' => '89 kcal',
			'preco' => 'R$20,00'),
	);