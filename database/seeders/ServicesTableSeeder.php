<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 16,
                'name' => 'advogado direito trabalhista',
                'title' => 'advogado direito trabalhista',
                'subtitle' => 'advogado direito trabalhista',
                'briefDescription' => 'advogado direito trabalhista',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elit sapien, consectetur quis ligula sit amet, fringilla congue purus. Duis iaculis elit purus, eget placerat tellus placerat sit amet. Donec mauris massa, convallis non nisi ut, dictum efficitur lacus. Duis tempus turpis tincidunt pulvinar rutrum. Phasellus sit amet faucibus nibh. Aliquam commodo mauris nec nisl cursus, non faucibus ante cursus. Sed egestas non libero quis posuere. Nam sed egestas ipsum.

Ut eu neque massa. Suspendisse semper metus sed augue accumsan, id rhoncus tortor pellentesque. In hac habitasse platea dictumst. Maecenas porttitor mattis risus eu bibendum. Maecenas eget nulla sem. Mauris laoreet risus et congue consequat. Suspendisse egestas molestie velit, eu rutrum sem porta ac. Suspendisse ante massa, finibus a ultrices eu, efficitur vitae eros. Vestibulum consequat, elit ut congue pellentesque, est erat maximus velit, non dignissim enim nisl a magna. Fusce eget ipsum ante. Aliquam mauris leo, consectetur ac volutpat convallis, porta et ex.

Aliquam erat volutpat. Pellentesque commodo arcu non bibendum iaculis. Integer in diam accumsan, eleifend felis vel, imperdiet mauris. Nam tempus lectus enim, non ultrices leo cursus eget. Nunc vitae congue turpis. Sed nec sapien sapien. Nam ex tellus, tristique non quam eu, ultricies condimentum nisl. Donec posuere libero eu sagittis fringilla. Aliquam in nisl eget arcu vehicula laoreet id in lorem. Integer nisi justo, hendrerit at nunc et, eleifend auctor augue. Aenean ac aliquet turpis, ut pharetra lacus. Aenean viverra eget ligula ac hendrerit. Nunc tristique tempus turpis, quis accumsan sem semper et. Maecenas mollis dolor ut lobortis tristique.

Suspendisse ac congue nunc. Praesent mi tortor, scelerisque et quam vel, dapibus pellentesque est. Suspendisse ut accumsan orci. Donec venenatis neque lacus, non lacinia justo gravida vitae. Nam mollis neque sit amet lacus lacinia, quis vestibulum est dapibus. Fusce accumsan fermentum tortor at ornare. Vivamus in enim auctor velit tincidunt gravida et in neque. Praesent gravida mi id libero rhoncus sagittis. Proin at erat nec nulla pretium cursus id non risus. Curabitur sit amet suscipit quam, a porttitor arcu. Pellentesque sollicitudin purus eget aliquam sagittis. Mauris mollis id nibh quis posuere. Morbi velit augue, efficitur sed urna sed, rhoncus tincidunt libero. Phasellus scelerisque volutpat ante, at pharetra magna efficitur vel.

Morbi efficitur tellus ut massa vulputate, quis ullamcorper augue blandit. Integer orci nibh, dignissim non congue sed, malesuada sed diam. Sed at metus rutrum, lacinia leo sit amet, tempor elit. Maecenas sagittis porttitor accumsan. In tempus metus ac nisi hendrerit, sit amet laoreet est fringilla. Proin rutrum ultrices sodales. Praesent iaculis eros odio, eget sodales lorem finibus eget. Donec fermentum ipsum sit amet arcu suscipit condimentum. Praesent quis ornare ligula. Phasellus eget condimentum quam. Phasellus laoreet velit leo, quis tincidunt leo rhoncus cursus. Cras tortor ligula, pretium ut lorem in, sollicitudin tincidunt leo. Aenean ac tristique arcu. In porta enim vitae metus porta, non semper ligula tempor. Sed et neque tellus.',
                'videoTitle' => 'advogado direito trabalhista',
                'video' => 'advogado direito trabalhista',
                'slug' => 'advogado-direito-trabalhista-2',
                'print' => 1,
                'home' => 1,
                'created_at' => '2023-08-25 04:42:19',
                'updated_at' => '2023-08-25 04:42:19',
            ),
        ));
        
        
    }
}