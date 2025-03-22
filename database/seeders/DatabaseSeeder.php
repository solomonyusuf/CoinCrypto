<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Middleware\TrustHosts;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Event;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = Role::create([
            'title'=> 'superadmin'
        ]);
        
        $author = Role::create([
            'title'=> 'author'
        ]);

        $member = Role::create([
            'title'=> 'member'
        ]);
         
        User::create([
            'role_id'=> $member->id,
            'image'=> 'https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-3.jpg',
            'info' => 'Shola Co-Leader of the CoinCrypto tokens and data team in Asia with a focus on crypto derivatives, DeFi, market microstructure, and protocol analysis. Shola holds over $1,000 in BTC, ETH, SOL, AVAX, SUSHI, CRV, NEAR,',
            'first_name'=> 'Shola',
            'last_name'=> 'Davis',
            'email'=> 'member@coincrypto.com.ng',
            'password'=> bcrypt(12345),

        ]);
        
        User::create([
            'role_id'=> $author->id,
            'image'=> 'https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-5.jpg',
            'info' => 'Shola Co-Leader of the CoinCrypto tokens and data team in Asia with a focus on crypto derivatives, DeFi, market microstructure, and protocol analysis. Shola holds over $1,000 in BTC, ETH, SOL, AVAX, SUSHI, CRV, NEAR,',
            'first_name'=> 'Shola',
            'last_name'=> 'Davis',
            'email'=> 'staff@coincrypto.com.ng',
            'password'=> bcrypt(12345),

        ]);
        
        User::create([
            'role_id'=> $admin->id,
            'image'=> 'https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-1.jpg',
            'info' => 'Shola Co-Leader of the CoinCrypto tokens and data team in Asia with a focus on crypto derivatives, DeFi, market microstructure, and protocol analysis. Shola holds over $1,000 in BTC, ETH, SOL, AVAX, SUSHI, CRV, NEAR,',
            'first_name'=> 'Shola',
            'last_name'=> 'Davis',
            'email'=> 'admin@coincrypto.com.ng',
            'password'=> bcrypt(12345),

        ]);

        $cat1 = ArticleCategory::create([
            'title' => 'Crypto'
        ]);
        
        $cat2 =ArticleCategory::create([
            'title' => 'Forex'
        ]);

        $cat3 = ArticleCategory::create([
            'title' => 'World Market'
        ]);

        Article::create([
            'title'=> 'Interest Rate Fears Replace Tariff Fears as Crypto Pulls Back',
            'content'=> 'The stock market initially bounced off a sharply lower opening and bitcoin (BTC) rose through $91,000 as Commerce Secretary Howard Lutnick — in an appearance on CNBC — said the president would exempt Mexico from his new 25% tariff for any goods or services covered under a previous trade agreement. The nicer stance toward the country neighbor to the south was confirmed later by a social media post from Trump.',
            'image'=> 'https://www.coindesk.com/_next/image?temp=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fba35b36b71c9ef79a95988afed29eb11ae4b8d7a-5462x3641.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat1->id,
        ]);
        
        Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?temp=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat2->id,
        ]);

        Event::create([
            'title'=> 'US Concensus 2025',
            'content'=> 'The people and companies driving the most dynamic region in crypto.',
            'image'=> 'https://www.coindesk.com/_next/image?temp=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fba35b36b71c9ef79a95988afed29eb11ae4b8d7a-5462x3641.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category'=> 'crypto',
            'event_date'=> \Carbon\Carbon::now()->addMonth()
        ]);
    }
}
