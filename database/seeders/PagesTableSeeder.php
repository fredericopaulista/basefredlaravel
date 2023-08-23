<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Políticas de Privacidade',
                'slug' => 'politicas-de-privacidade',
                'briefDescription' => 'breve descrição de políticas de Privacidade',
            'description' => '<p>Política PrivacidadeA sua privacidade é importante para nós. É política do Nome do site respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site Nome do site, e outros sites que possuímos e operamos.Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também informamos por que estamos coletando e como será usado.Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso ou modificação não autorizados.Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido por lei.O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar responsabilidade por suas respectivas&nbsp;políticas de privacidade.Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos fornecer alguns dos serviços desejados.O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de privacidade e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais, entre em contacto connosco.O serviço Google AdSense que usamos para veicular publicidade usa um cookie DoubleClick para veicular anúncios mais relevantes em toda a Web e limitar o número de vezes que um determinado anúncio é exibido para você.Para mais informações sobre o Google AdSense, consulte as FAQs oficiais sobre privacidade do Google AdSense.Utilizamos anúncios para compensar os custos de funcionamento deste site e fornecer financiamento para futuros desenvolvimentos. Os cookies de publicidade comportamental usados ​​por este site foram projetados para garantir que você forneça os anúncios mais relevantes sempre que possível, rastreando anonimamente seus interesses e apresentando coisas semelhantes que possam ser do seu interesse.Vários parceiros anunciam em nosso nome e os cookies de rastreamento de afiliados simplesmente nos permitem ver se nossos clientes acessaram o site através de um dos sites de nossos parceiros, para que possamos creditá-los adequadamente e, quando aplicável, permitir que nossos parceiros afiliados ofereçam qualquer promoção que pode fornecê-lo para fazer uma compra.Compromisso do UsuárioO usuário se compromete a fazer uso adequado dos conteúdos e da informação que o Nome do site oferece no site e com caráter enunciativo, mas não limitativo:A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem pública;B) Não difundir propaganda ou conteúdo de natureza racista, xenofóbica, jogos de sorte ou azar, qualquer tipo de pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) do Nome do site, de seus fornecedores ou terceiros, para introduzir ou disseminar vírus informáticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.Mais informaçõesEsperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa em nosso site.Esta política é efetiva a partir de&nbsp;21 August 2023 15:23</p>',
                'status' => 1,
                'visible' => 1,
                'created_at' => '2023-08-21 15:24:12',
                'updated_at' => '2023-08-21 15:24:12',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Termos de Uso',
                'slug' => 'termos-de-uso',
                'briefDescription' => 'Termos de Uso - breve descrição',
            'description' => '<p>1. TermosAo acessar ao site Nome do site, concorda em cumprir estes termos de serviço, todas as leis e regulamentos aplicáveis ​​e concorda que é responsável pelo cumprimento de todas as leis locais aplicáveis. Se você não concordar com algum desses termos, está proibido de usar ou acessar este site. Os materiais contidos neste site são protegidos pelas leis de direitos autorais e marcas comerciais aplicáveis.2. Uso de LicençaÉ concedida permissão para baixar temporariamente uma cópia dos materiais (informações ou software) no site Nome do site , apenas para visualização transitória pessoal e não comercial. Esta é a concessão de uma licença, não uma transferência de título e, sob esta licença, você não pode:&nbsp;modificar ou copiar os materiais;&nbsp;usar os materiais para qualquer finalidade comercial ou para exibição pública (comercial ou não comercial);&nbsp;tentar descompilar ou fazer engenharia reversa de qualquer software contido no site Nome do site;&nbsp;remover quaisquer direitos autorais ou outras notações de propriedade dos materiais; ou&nbsp;transferir os materiais para outra pessoa ou \'espelhe\' os materiais em qualquer outro servidor.Esta licença será automaticamente rescindida se você violar alguma dessas restrições e poderá ser rescindida por Nome do site a qualquer momento. Ao encerrar a visualização desses materiais ou após o término desta licença, você deve apagar todos os materiais baixados em sua posse, seja em formato eletrónico ou impresso.3. Isenção de responsabilidadeOs materiais no site da Nome do site são fornecidos \'como estão\'. Nome do site não oferece garantias, expressas ou implícitas, e, por este meio, isenta e nega todas as outras garantias, incluindo, sem limitação, garantias implícitas ou condições de comercialização, adequação a um fim específico ou não violação de propriedade intelectual ou outra violação de direitos.Além disso, o Nome do site não garante ou faz qualquer representação relativa à precisão, aos resultados prováveis ​​ou à confiabilidade do uso dos materiais em seu site ou de outra forma relacionado a esses materiais ou em sites vinculados a este site.4. LimitaçõesEm nenhum caso o Nome do site ou seus fornecedores serão responsáveis ​​por quaisquer danos (incluindo, sem limitação, danos por perda de dados ou lucro ou devido a interrupção dos negócios) decorrentes do uso ou da incapacidade de usar os materiais em Nome do site, mesmo que Nome do site ou um representante autorizado da Nome do site tenha sido notificado oralmente ou por escrito da possibilidade de tais danos. Como algumas jurisdições não permitem limitações em garantias implícitas, ou limitações de responsabilidade por danos conseqüentes ou incidentais, essas limitações podem não se aplicar a você.5. Precisão dos materiaisOs materiais exibidos no site da Nome do site podem incluir erros técnicos, tipográficos ou fotográficos. Nome do site não garante que qualquer material em seu site seja preciso, completo ou atual. Nome do site pode fazer alterações nos materiais contidos em seu site a qualquer momento, sem aviso prévio. No entanto, Nome do site não se compromete a atualizar os materiais.6. LinksO Nome do site não analisou todos os sites vinculados ao seu site e não é responsável pelo conteúdo de nenhum site vinculado. A inclusão de qualquer link não implica endosso por Nome do site do site. O uso de qualquer site vinculado é por conta e risco do usuário.ModificaçõesO Nome do site pode revisar estes termos de serviço do site a qualquer momento, sem aviso prévio. Ao usar este site, você concorda em ficar vinculado à versão atual desses termos de serviço.Lei aplicávelEstes termos e condições são regidos e interpretados de acordo com as leis do Nome do site e você se submete irrevogavelmente à jurisdição exclusiva dos tribunais naquele estado ou localidade.</p>',
                'status' => 1,
                'visible' => 1,
                'created_at' => '2023-08-21 15:27:51',
                'updated_at' => '2023-08-21 15:27:51',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Contato',
                'slug' => 'contato',
                'briefDescription' => 'Entre cm contato conosco',
                'description' => '<p>Você está interessado em contatar nossa empresa ou quer fazer uma pergunta?</p><ul><li>Se preferir, nos mande uma mensagem através do telefone WhatsApp ou ligue.</li><li>Complete o formulário ao lado e um de nossos atendentes entrará em contato em até um dia útil.</li><li>O objetivo do nosso time de especialistas é ajudar você da melhor maneira possível. Por isso, precisamos das suas informações para direcionar nossa conversa!</li></ul>',
                'status' => 1,
                'visible' => 1,
                'created_at' => '2023-08-21 17:04:17',
                'updated_at' => '2023-08-21 17:04:17',
            ),
        ));
        
        
    }
}