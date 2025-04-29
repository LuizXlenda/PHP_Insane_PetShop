<?php 
    function listaOsAnimals(){
        
        $animais = [
        [
            "nome" => "Golden Retriever",
            "descricao" => "Cão amigável, inteligente e dedicado.",
            "valor" => 2500.00
        ],
        [
            "nome" => "Bulldog Francês",
            "descricao" => "Pequeno, forte, adora companhia e é bem dócil.",
            "valor" => 3500.00
        ],
        [
            "nome" => "Poodle",
            "descricao" => "Muito inteligente e fácil de treinar.",
            "valor" => 2200.00
        ],
        [
            "nome" => "Rottweiler",
            "descricao" => "Protetor, forte e muito leal.",
            "valor" => 3000.00
        ],
        [
            "nome" => "Maine Coon",
            "descricao" => "Gato de grande porte, gentil e sociável.",
            "valor" => 2500.00
        ],
        [
            "nome" => "Persa",
            "descricao" => "Gato elegante e calmo, exige cuidados diários com os pelos.",
            "valor" => 2800.00
        ],
        [
            "nome" => "Siamês",
            "descricao" => "Extremamente comunicativo e carinhoso.",
            "valor" => 2300.00
        ],
        [
            "nome" => "Pastor Alemão",
            "descricao" => "Protetor nato, muito obediente e inteligente.",
            "valor" => 3200.00
        ],
        [
            "nome" => "Spitz Alemão (Lulu da Pomerânia)",
            "descricao" => "Fofo, pequeno e com pelos volumosos.",
            "valor" => 4000.00
        ],
        [
            "nome" => "Dragão Branco de Olhos Azuis",
            "descricao" => "Uma poderosa máquina de destruição",
            "valor" => 9999999999.00
        ],
        [
            "nome" => "Exodia",
            "descricao" => "Um braço direito proibido e selado por magia.",
            "valor" => 3973845837324.00
        ],
        [
            "nome" => "Beagle",
            "descricao" => "Animado, curioso e adora companhia.",
            "valor" => 2100.00
        ]
        ];

        echo "<div class='destaques-container'>";
        foreach($animais as $animals){
            echo "<div class='destaque'>";
            echo "<h3>{$animals['nome']}</h3>";
            echo "<p>{$animals['descricao']}</p>";
            echo "<strong>R$ " . number_format($animals['valor'], 2, ',', '.') . "</strong>";
            echo "</div>";


        }
    }

?>