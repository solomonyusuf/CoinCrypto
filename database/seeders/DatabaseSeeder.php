<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Middleware\TrustHosts;
use App\Models\AppVideo;
use App\Models\ArticleCreator;
use App\Models\Episode;
use App\Models\Newsletter;
use App\Models\Podcast;
use App\Models\VideoCategory;
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
        
        $u3 = User::create([
            'role_id'=> $admin->id,
            'image'=> 'https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-1.jpg',
            'info' => 'Shola Co-Leader of the CoinCrypto tokens and data team in Asia with a focus on crypto derivatives, DeFi, market microstructure, and protocol analysis. Shola holds over $1,000 in BTC, ETH, SOL, AVAX, SUSHI, CRV, NEAR,',
            'first_name'=> 'Shola',
            'last_name'=> 'Davis',
            'email'=> 'admin@coincrypto.com.ng',
            'title'=> 'Co-regional news chief, Americas',
            'password'=> bcrypt(12345),

        ]);

        $cat1 = ArticleCategory::create([
            'title' => 'Crypto'
        ]);
    
        $cat4 = ArticleCategory::create([
            'title' => 'Opinion'
        ]);
        $cat2 = ArticleCategory::create([
            'title' => 'Press release'
        ]);
        $cat3 = ArticleCategory::create([
            'title' => 'Market'
        ]);
        $cat5 = ArticleCategory::create([
            'title' => 'Finance'
        ]);
        $cat6 = ArticleCategory::create([
            'title' => 'Tech'
        ]);
        $cat7 = ArticleCategory::create([
            'title' => 'Policy'
        ]);
         $cat8 = ArticleCategory::create([
            'title' => 'Concensus Magazine'
        ]); 
        $cat9 = ArticleCategory::create([
            'title' => 'Learn'
        ]);
        $news = Newsletter::create([
            'user_id'=> $u3->id,
            'sponsored'=> true,
            'visible'=> true,
            'title'=> 'Crypto Daily Falls',
            'description'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
        ]);

        $a2 = Article::create([
            'title'=> 'Interest Rate Fears Replace Tariff Fears as Crypto Pulls Back',
            'content'=> 'The stock market initially bounced off a sharply lower opening and bitcoin (BTC) rose through $91,000 as Commerce Secretary Howard Lutnick — in an appearance on CNBC — said the president would exempt Mexico from his new 25% tariff for any goods or services covered under a previous trade agreement. The nicer stance toward the country neighbor to the south was confirmed later by a social media post from Trump.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fba35b36b71c9ef79a95988afed29eb11ae4b8d7a-5462x3641.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat1->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);
        
        $a1 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat2->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);
        $a12 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat3->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);
        $a13 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat2->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);




        $a3 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat3->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);
        $a4 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat4->id,
            'newsletter_id'=> $news->id,
            'slug'=> 'test_1',
            'info'=> 'Paid for by gate.io'
        ]);
        $a5 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat5->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);$a51 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat5->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);$a6 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat6->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);$a7 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat7->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);$a8 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat8->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);$a9 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat9->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);
        $a10 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat9->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);
        
       

        ArticleCreator::create([
            'article_id'=> $a12->id,
		    'user_id'=> $u3->id
        ]);
        ArticleCreator::create([
            'article_id'=> $a13->id,
		    'user_id'=> $u3->id
        ]);
        ArticleCreator::create([
            'article_id'=> $a51->id,
		    'user_id'=> $u3->id
        ]);ArticleCreator::create([
            'article_id'=> $a1->id,
		    'user_id'=> $u3->id
        ]);
        ArticleCreator::create([
            'article_id'=> $a2->id,
		    'user_id'=> $u3->id
        ]);
         ArticleCreator::create([
            'article_id'=> $a3->id,
		    'user_id'=> $u3->id
        ]);
        ArticleCreator::create([
            'article_id'=> $a4->id,
		    'user_id'=> $u3->id
        ]);ArticleCreator::create([
            'article_id'=> $a5->id,
		    'user_id'=> $u3->id
        ]);ArticleCreator::create([
            'article_id'=> $a6->id,
		    'user_id'=> $u3->id
        ]);ArticleCreator::create([
            'article_id'=> $a7->id,
		    'user_id'=> $u3->id
        ]);ArticleCreator::create([
            'article_id'=> $a8->id,
		    'user_id'=> $u3->id
        ]);ArticleCreator::create([
            'article_id'=> $a9->id,
		    'user_id'=> $u3->id
        ]);
        ArticleCreator::create([
            'article_id'=> $a10->id,
		    'user_id'=> $u3->id
        ]);

        Event::create([
            'title'=> 'US Concensus 2025',
            'content'=> 'The people and companies driving the most dynamic region in crypto.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fba35b36b71c9ef79a95988afed29eb11ae4b8d7a-5462x3641.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fba35b36b71c9ef79a95988afed29eb11ae4b8d7a-5462x3641.jpg%3Fauto%3Dformat&w=1080&q=75',
            'event_date'=> \Carbon\Carbon::now()->addMonth()
            
        ]);

       $v1 =  VideoCategory::create([
            'description' => 'TV quick roundup of the top news of the day that you may have missed in the cryptocurrency, digital assets and Web3 space.',
		    'title' => 'CoinCrypto Daily'
        ]);

        AppVideo::create([
            'link' => 'https://www.youtube.com/embed/XniK10GsmwA?si=BFYev4snlcpqiS87',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'EASY Crypto Trading Strategy I Used to Make 10x',
            'description'=>'This video is for entertainment purposes only. It is not financial advice and is not an endorsement of any provider, product, asset or service. ',
            'sponsored' => true,
            'category_id' => $v1->id,
            'visible'=> true
        ]);AppVideo::create([
            'link' => 'https://www.youtube.com/embed/XniK10GsmwA?si=BFYev4snlcpqiS87',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'EASY Crypto Trading Strategy I Used to Make 10x',
            'description'=>'This video is for entertainment purposes only. It is not financial advice and is not an endorsement of any provider, product, asset or service. ',
            'sponsored' => true,
            'category_id' => $v1->id,
            'visible'=> true
        ]);AppVideo::create([
            'link' => 'https://www.youtube.com/embed/XniK10GsmwA?si=BFYev4snlcpqiS87',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'EASY Crypto Trading Strategy I Used to Make 10x',
            'description'=>'This video is for entertainment purposes only. It is not financial advice and is not an endorsement of any provider, product, asset or service. ',
            'sponsored' => true,
            'category_id' => $v1->id,
            'visible'=> true
        ]);AppVideo::create([
            'link' => 'https://www.youtube.com/embed/XniK10GsmwA?si=BFYev4snlcpqiS87',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'EASY Crypto Trading Strategy I Used to Make 10x',
            'description'=>'This video is for entertainment purposes only. It is not financial advice and is not an endorsement of any provider, product, asset or service. ',
            'sponsored' => true,
            'category_id' => $v1->id,
            'visible'=> true
        ]);AppVideo::create([
            'link' => 'https://www.youtube.com/embed/XniK10GsmwA?si=BFYev4snlcpqiS87',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'EASY Crypto Trading Strategy I Used to Make 10x',
            'description'=>'This video is for entertainment purposes only. It is not financial advice and is not an endorsement of any provider, product, asset or service. ',
            'sponsored' => true,
            'category_id' => $v1->id,
            'visible'=> true
        ]);AppVideo::create([
            'link' => 'https://www.youtube.com/embed/XniK10GsmwA?si=BFYev4snlcpqiS87',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'EASY Crypto Trading Strategy I Used to Make 10x',
            'description'=>'This video is for entertainment purposes only. It is not financial advice and is not an endorsement of any provider, product, asset or service. ',
            'sponsored' => true,
            'category_id' => $v1->id,
            'visible'=> true
        ]);AppVideo::create([
            'link' => 'https://www.youtube.com/embed/XniK10GsmwA?si=BFYev4snlcpqiS87',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'EASY Crypto Trading Strategy I Used to Make 10x',
            'description'=>'This video is for entertainment purposes only. It is not financial advice and is not an endorsement of any provider, product, asset or service. ',
            'sponsored' => true,
            'category_id' => $v1->id,
            'visible'=> true
        ]);AppVideo::create([
            'link' => 'https://www.youtube.com/embed/XniK10GsmwA?si=BFYev4snlcpqiS87',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'EASY Crypto Trading Strategy I Used to Make 10x',
            'description'=>'This video is for entertainment purposes only. It is not financial advice and is not an endorsement of any provider, product, asset or service. ',
            'sponsored' => true,
            'category_id' => $v1->id,
            'visible'=> true
        ]);AppVideo::create([
            'link' => 'https://www.youtube.com/embed/XniK10GsmwA?si=BFYev4snlcpqiS87',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'EASY Crypto Trading Strategy I Used to Make 10x',
            'description'=>'This video is for entertainment purposes only. It is not financial advice and is not an endorsement of any provider, product, asset or service. ',
            'sponsored' => true,
            'category_id' => $v1->id,
            'visible'=> true
        ]);AppVideo::create([
            'link' => 'https://www.youtube.com/embed/XniK10GsmwA?si=BFYev4snlcpqiS87',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'EASY Crypto Trading Strategy I Used to Make 10x',
            'description'=>'This video is for entertainment purposes only. It is not financial advice and is not an endorsement of any provider, product, asset or service. ',
            'sponsored' => true,
            'category_id' => $v1->id,
            'visible'=> true
        ]);AppVideo::create([
            'link' => 'https://www.youtube.com/embed/XniK10GsmwA?si=BFYev4snlcpqiS87',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'EASY Crypto Trading Strategy I Used to Make 10x',
            'description'=>'This video is for entertainment purposes only. It is not financial advice and is not an endorsement of any provider, product, asset or service. ',
            'sponsored' => true,
            'category_id' => $v1->id,
            'visible'=> true
        ]);AppVideo::create([
            'link' => 'https://www.youtube.com/embed/XniK10GsmwA?si=BFYev4snlcpqiS87',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'EASY Crypto Trading Strategy I Used to Make 10x',
            'description'=>'This video is for entertainment purposes only. It is not financial advice and is not an endorsement of any provider, product, asset or service. ',
            'sponsored' => true,
            'category_id' => $v1->id,
            'visible'=> true
        ]);AppVideo::create([
            'link' => 'https://www.youtube.com/embed/XniK10GsmwA?si=BFYev4snlcpqiS87',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'EASY Crypto Trading Strategy I Used to Make 10x',
            'description'=>'This video is for entertainment purposes only. It is not financial advice and is not an endorsement of any provider, product, asset or service. ',
            'sponsored' => true,
            'category_id' => $v1->id,
            'visible'=> true
        ]);AppVideo::create([
            'link' => 'https://www.youtube.com/embed/XniK10GsmwA?si=BFYev4snlcpqiS87',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'EASY Crypto Trading Strategy I Used to Make 10x',
            'description'=>'This video is for entertainment purposes only. It is not financial advice and is not an endorsement of any provider, product, asset or service. ',
            'sponsored' => true,
            'category_id' => $v1->id,
            'visible'=> true
        ]);AppVideo::create([
            'link' => 'https://www.youtube.com/embed/XniK10GsmwA?si=BFYev4snlcpqiS87',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'EASY Crypto Trading Strategy I Used to Make 10x',
            'description'=>'This video is for entertainment purposes only. It is not financial advice and is not an endorsement of any provider, product, asset or service. ',
            'sponsored' => true,
            'category_id' => $v1->id,
            'visible'=> true
        ]);AppVideo::create([
            'link' => 'https://www.youtube.com/embed/XniK10GsmwA?si=BFYev4snlcpqiS87',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'EASY Crypto Trading Strategy I Used to Make 10x',
            'description'=>'This video is for entertainment purposes only. It is not financial advice and is not an endorsement of any provider, product, asset or service. ',
            'sponsored' => true,
            'category_id' => $v1->id,
            'visible'=> true
        ]);

        $pod = Podcast::create([
            'image' => 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'user_id'=> $u3->id,
            'title'=> 'Market Daily',
            'description'=> 'The latest price moves and insights with Jennifer Sanasie and Token Metrics CEO Ian Balina and Titan Founder Chris Chung.',
        ]);

        Episode::create([
            'podcast_id' => $pod->id,
            'link'=> 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'What Are Perpetual Futures Contracts?',
            'castbox'=> 'https://castbox.com',
            'itunes'=> 'https://itunes.com',
            'spotify'=> 'https://spotify.com',
            'podchaser'=> 'https://podchaser.com',
            'description'=> 'The latest price moves and insights with Jennifer Sanasie and Token Metrics CEO Ian Balina and Titan Founder Chris Chung.'
        ]);
        Episode::create([
            'podcast_id' => $pod->id,
            'link'=> 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'Why Are Perpetual Futures Contracts?',
            'castbox'=> 'castbox.com',
            'itunes'=> 'itunes.com',
            'spotify'=> 'spotify.com',
            'podchaser'=> 'podchaser.com',
            'description'=> 'The latest price moves and insights with Jennifer Sanasie and Token Metrics CEO Ian Balina and Titan Founder Chris Chung.'
        ]);
        Episode::create([
            'podcast_id' => $pod->id,
            'link'=> 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png%3Fauto%3Dformat&w=3840&q=75',
            'title'=> 'These Are Perpetual Futures Contracts?',
            'castbox'=> 'https://castbox.com',
            'itunes'=> 'https://itunes.com',
            'spotify'=> 'https://spotify.com',
            'podchaser'=> 'https://podchaser.com',
            'description'=> 'The latest price moves and insights with Jennifer Sanasie and Token Metrics CEO Ian Balina and Titan Founder Chris Chung.'
        ]);
    }
}
