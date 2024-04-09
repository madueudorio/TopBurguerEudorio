<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Menu = [
            [
                id: "1", nome: "Porção de Arroz Carreteiro", preco: "Valor: R$65,00", ingredientes: "Ingredientes: Carnes de churrasco picadas em cubos, Arroz, Cebola ,Dentes de alho, Tomate, Ramos de salsinha e Cebolinha",
imagens: require('./assets/images/arrozcarreteiro.png')
            ],
        
            [
                id: "2", nome: "Charuto de Carne Seca", preco: "Valor: R$87,00", ingredientes: "Ingredientes: Repolho, Pimentão vermelho, Pimenta do reino, Carne seca desfiada, Molho de tomate e Cebola",
                imagens: require('./assets/images/charutocarneseca.png')
            ],
        
            [
                id: "3", nome: "Espaguete à Bolonhesa", preco: "Valor: R$68,00", ingredientes: "Ingredientes: Macarrão espaguete, Queijo Mussarela, Presunto e Molho de Tomate ou Molho Branco",
                imagens: require('./assets/images/espaguetebolonhesa.png')
            ],
        
            [
                id: "4", nome: "Espaguete com Camarão", preco: "Valor: R$97,00", ingredientes: "Ingredientes: Macarrão Espaguete com Camarão juntamente ao molho tártaro",
                imagens: require('./assets/images/espaguetecamarao.png')
            ],
        
            [
                id: "5", nome: "Lagosta Assada", preco: "Valor: R$130,00", ingredientes: "Ingredientes: Lagosta temperada com Vinagre, Azeite, Pimenta, Alho,Cebola E Tomate",
                imagens: require('./assets/images/lagosta.png')
            ],
        
            [
                id: "6", nome: "Lula Assada", preco: "Valor: R$120,00", ingredientes: "Ingredientes: Lula temperada com Vinagre, Azeite, Pimenta, Alho,Cebola E Tomate",
                imagens: require('./assets/images/lula.png')
            ],
        
            [
                id: "7", nome: "Macarrão ao Molho Branco Juntamente á Frutos do Mar", preco: "Valor: R$91,00", ingredientes: "Ingredientes: Macarrão ao Molho branco com Cebola, Salsinha, Farinha de trigo, Creme de leite e Salsinha",
                imagens: require('./assets/images/macarraomolhobranco.png')
            ],
        
            [
                id: "8", nome: "Risoto de Frutos Do Mar ao Molho de Maracujá", preco: "Valor: R$154,00", ingredientes: "Ingredientes: Risoto feito com frutosdo mar de sua escolha, Carne de sua escolhs, Molho de Maracujá",
           imagens: require('./assets/images/risotoaomolhomaracuja.png')
            ],
        
            [
                id: "9", nome: "Risoto com Purê De Batata Doce Roxa", preco: "Valor: R$149,00", ingredientes: "Ingredientes: Batata doce roxa e Risoto com Frutos do mar",
                imagens: require('./assets/images/puredoceroxa.png')
            ],
        
            [
                id: "10", nome: "Yakisoba", preco: "Valor: R$96,00", ingredientes: "Ingredientes: Macarrão Espaguete, Cenoura, Brócolis, Couve Flor e Carne",
                imagens: require('./assets/images/yakisoba.png')
            ],
            [
                id: "11", nome: "Sorvete Acompanhado de Brownie", preco: "Valor: R$32,00", ingredientes: "Ingredientes: Sorvete da sau Escolha com Brownie de Chocolate com gotas de Chocolate",
                imagens: require('./assets/images/sorvetebrownie.png')
            ],
        
            [
                id: "12", nome: "Torta de Amoras", preco: "Valor: R$25,00", ingredientes: "Ingredientes: Creme Branco, Massa de torta, Calda de Amoras, Amora",
                ]    imagens: require('./assets/images/tortaamora.png')
            ,
        
            [
                id: "13", nome: "Torta de Frutas Vermelhas", preco: "Valor: R$25,00", ingredientes: "Ingredientes: Creme Branco, Massa de torta, Calda de Frutas Vermelhas, Morango, Framboesa, Amora e Blueberry",
                imagens: require('./assets/images/tortafrutasvermelhas.png')
            ],
        
            [
                id: "14", nome: "Wafle de Nuttela", preco: "Valor: R$54,00", ingredientes: "Ingredientes: Massa de Wafles com Nutella e Granulados",
                imagens: require('./assets/images/waflfle.png')
            ],
        
            [
                id: "15", nome: "Petit Gateau", preco: "Valor: R$65,00", ingredientes: "Ingredientes: Bolo de chocolate com Recheio e Sorvete de sua Preferência",
                imagens: require('./assets/images/petitgatto.png')
            ],
            [
                id: "16", nome: "Gin De Morango", preco: "Valor: R$36,00", ingredientes: "Ingredientes: Gin, Morangos, Açúcar, Hortelã e Calda de Sua Escolha",
                imagens: require('./assets/images/ginfrutas.png')
            ],
        
            [
                id: "17", nome: "Gin De Frutas Vermelhas", preco: "Valor: R$36,00", ingredientes: "Ingredientes: Gin, Frutas Vermelhas, Açúcar, Hortelã e Calda de Sua Escolha",
       imagens: require('./assets/images/ginfrutasvermelhas.png')
            ],
    
            [
                id: "18", nome: "Vodka com Água com Gás", preco: "Valor: R$75,00", ingredientes: "Vodka, Água com Gás, Açúcar e Gelo",
                imagens: require('./assets/images/vodka.png')
            ],
        
            [
                id: "19", nome: "Xevete de Morango", preco: "Valor: R$65,00", ingredientes: "Energético, Vodka, Açúcar e Gelo",
                imagens: require('./assets/images/xevete.png')
            ],
        
            [
                id: "20", nome: "Cerveja 1L", preco: "Valor: R$25,00", ingredientes: "Tipos: Heineken, Skol, Brahma, Amstel, Corona, Itaipava, Cristal e Baudweiser",
                imagens: require('./assets/images/cerveja.png')
            ],
        
            [
                id: "21", nome: "Coquetel de Framboesa", preco: "Valor: R$37,00", ingredientes: "Ingredientes: Suco de Framboesa, Vodka, Açúcar, Gelo e Alecrim",
                imagens: require('./assets/images/coqueteldemorango.png')
            ],
        
            [
                id: "22", nome: "Refrigerante 1L e 2L", preco: "Valor: R$10,00", ingredientes: "Tipos: Coca, Fanta, Guaraná, Sprite, Fanta Uva",
                imagens: require('./assets/images/refri.png')
            ],
        
        
            [
                id: "23", nome: "Vinho", preco: "Valor: R$47,00", ingredientes: "Tipos: Vinho doce e Seco",
                imagens: require('./assets/images/vinho.png')
            ],
        
        
            [
                id: "24", nome: "Suco de Maracujá", preco: "Valor: R$12,00", ingredientes: "Ingredientes: Suco Natural de Maracujá, Açúcar, e Gelo",
                imagens: require('./assets/images/sucomaracuja.png')
            ],
        
        
            [
                id: "25", nome: "Champanhe", preco: "Valor: R$52,00", ingredientes: "Tipos: Espumante Doce e Seco",
                imagens: require('./assets/images/champanhe.png')
            ],
        
        
            [
                id: "26", nome: "Suco de Abacaxi com Hortelã", preco: "Valor: R$12,00", ingredientes: "Ingredientes: Suco Natural de Abacaxi,Hortelã, Açúcar, e Gelo",
                imagens: require('./assets/images/abacaxiehortela.png')
            ],
        
        
            [
                id: "27", nome: "Ice", preco: "Valor: R$7,00", ingredientes: "Tipos: Maracujá, Limão e Frutas Vermelhas",
                imagens: require('./assets/images/ice.png')
            ],
            
            
            [
                id: "28", nome: "Suco de Morango", preco: "Valor: R$12,00", ingredientes: "Ingredientes: Suco Natural de Morango, Açúcar, e Gelo",
                imagens: require('./assets/images/sucomorango.png')
            ],
        
            
            [
                id: "29", nome: "Suco De Laranja", preco: "Valor: R$12,00", ingredientes: "Ingredientes: Suco Natural de Laranja, Açúcar, e Gelo",
                imagens: require('./assets/images/sucodelaranja.png')
            ],
        
            [
                id: "30", nome: "Caipirinha", preco: "Valor: R$20,00", ingredientes: "Ingredientes: Limão, Vodka, Açúcar e Gelo",
                imagens: require('./assets/images/caipirinha.png')
            ],
        
        
            [
                id: "31", nome: "Suco De Limão", preco: "Valor: R$12,00", ingredientes: "Ingredientes: Suco Natural de Limão, Açúcar, e Gelo",
                imagens: require('./assets/images/sucodelimao.png')
            ],
        
        
            [
                id: "32", nome: "H2O", preco: "Valor: R$15,00", ingredientes: "Tipo: 600ml e 1L",
                imagens: require('./assets/images/h2O.png')
            ],
        ];

        foreach($Menu as $Menu) {
            DB::table('produtos')->insert([
                'nome' => $Menu['nome'],
                'preco' => $Menu['preco'],
                'ingredientes' => $Menu['ingredientes'],
                'imagem' => $Menu['imagem'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}


