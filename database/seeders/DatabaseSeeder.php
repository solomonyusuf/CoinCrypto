<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Middleware\TrustHosts;
use App\Models\AdvertSetting;
use App\Models\ApiKey;
use App\Models\AppSetting;
use App\Models\AppVideo;
use App\Models\ArticleCreator;
use App\Models\Episode;
use App\Models\Newsletter;
use App\Models\PageLink;
use App\Models\Podcast;
use App\Models\VideoCategory;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Event;
use App\Models\Role;
use Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        AdvertSetting::create([]);
        
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
            'info' => 'Shola Co-Leader of the 100xinsider tokens and data team in Asia with a focus on crypto derivatives, DeFi, market microstructure, and protocol analysis. Shola holds over $1,000 in BTC, ETH, SOL, AVAX, SUSHI, CRV, NEAR,',
            'first_name'=> 'Shola',
            'last_name'=> 'Davis',
            'email'=> 'member@100xinsider.com.ng',
            'password'=> bcrypt(12345),

        ]);
        
        User::create([
            'role_id'=> $author->id,
            'image'=> 'https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-5.jpg',
            'info' => 'Shola Co-Leader of the 100xinsider tokens and data team in Asia with a focus on crypto derivatives, DeFi, market microstructure, and protocol analysis. Shola holds over $1,000 in BTC, ETH, SOL, AVAX, SUSHI, CRV, NEAR,',
            'first_name'=> 'Shola',
            'last_name'=> 'Davis',
            'email'=> 'staff@100xinsider.com.ng',
            'password'=> bcrypt(12345),

        ]);
        
        $u3 = User::create([
            'role_id'=> $admin->id,
            'image'=> 'https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-1.jpg',
            'info' => 'Shola Co-Leader of the 100xinsider tokens and data team in Asia with a focus on crypto derivatives, DeFi, market microstructure, and protocol analysis. Shola holds over $1,000 in BTC, ETH, SOL, AVAX, SUSHI, CRV, NEAR,',
            'first_name'=> 'Shola',
            'last_name'=> 'Davis',
            'email'=> 'admin@100xinsider.com.ng',
            'title'=> 'Co-regional news chief, Americas',
            'password'=> bcrypt(12345),

        ]);

        PageLink::create([
            'name'=> 'News',
		    'slug'=> '/news',
        ]);
        PageLink::create([
            'name'=> 'Sponsored',
		    'slug'=> '/sponsored',
        ]);
        PageLink::create([
            'name'=> 'Google',
		    'slug'=> 'https://google.com',
        ]);
        PageLink::create([
            'name'=> 'Netflix',
		    'slug'=> 'https://netflix.com',
        ]);

        $cat1 = ArticleCategory::create([
            'title' => 'Latest Crypto News'
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
         $cat10 = ArticleCategory::create([
            'title' => 'Top Stories'
        ]);
        $cat11 = ArticleCategory::create([
            'title' => 'Most Read'
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
        $a13 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat10->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);
        $a14 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat10->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);
         $a15 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat10->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);
        $a16 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat10->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);

        $a17 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat11->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);
        $a18 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat11->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);
         $a19 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat11->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);
        $a20 = Article::create([
            'title'=> 'XRP, ADA, SOL Fall Harder Than BTC as White House Crypto Summit Fails to Wow Traders',
            'content'=> 'The much-anticipated White House Crypto Summit on Friday ended with a whimper rather than a bang for cryptocurrency traders, sending altcoins like XRP, Cardano’s ADA, and Solana’s SOL into steeper declines than market leader bitcoin (BTC).Investors had pinned high hopes on President Donald Trump’s pro-crypto stance, expecting bold announcements about a U.S. strategic crypto reserve that would prominently feature major altcoins.',
            'image'=> 'https://www.coindesk.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fdef0d98b21aeaaed3c0847566a33f7c63142d271-4032x3024.jpg%3Fauto%3Dformat&w=1080&q=75',
            'category_id'=> $cat11->id,
            'slug'=> 'test_1',
            'newsletter_id'=> $news->id,
            'info'=> 'Paid for by gate.io'
        ]);
        
       

        ArticleCreator::create([
            'article_id'=> $a20->id,
		    'user_id'=> $u3->id
        ]);
        ArticleCreator::create([
            'article_id'=> $a19->id,
		    'user_id'=> $u3->id
        ]);

        ArticleCreator::create([
            'article_id'=> $a18->id,
		    'user_id'=> $u3->id
        ]);
        ArticleCreator::create([
            'article_id'=> $a17->id,
		    'user_id'=> $u3->id
        ]);
        ArticleCreator::create([
            'article_id'=> $a16->id,
		    'user_id'=> $u3->id
        ]);
        ArticleCreator::create([
            'article_id'=> $a15->id,
		    'user_id'=> $u3->id
        ]); ArticleCreator::create([
            'article_id'=> $a13->id,
		    'user_id'=> $u3->id
        ]);
        ArticleCreator::create([
            'article_id'=> $a14->id,
		    'user_id'=> $u3->id
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
		    'title' => '100xinsider Daily'
        ]);

        $video = AppVideo::create([
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

        ApiKey::create([
            'role_id' => $admin->id,
            'key'=> Str::uuid(),
            'title'=> 'API Access Key'
        ]);

        AppSetting::create([
            'logo' =>'logo.png',
            'name'=> '100xinsider',
            'email'=> 'support@100xinsider.ng',
            'address'=> '67 Adeniyi uprat Lagos',
            'contact'=> '<section class="flex-grow flex flex-col gap-8 justify-center items-center w-full" data-module-name="contact-us" data-module-version="1.0.0" data-module-instance="default">
                            <div class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
                            <div class="flex justify-center">
                            <div class="w-full md:max-w-[680px]">
                            <h1 class="text-color-black font-sans text-color-charcoal-900 laptop:text-[2.5rem] laptop:leading-[3.125rem] mobile:text-[2rem] mobile:leading-10 font-bold">Contact Us</h1>
                            <div class="flex flex-col gap-6">
                            <div class="basis-full border-solid border-t border-charcoal-600">&nbsp;</div>
                            <p class="font-sans text-color-charcoal-600 text-sm leading-5 font-semibold uppercase">General</p>
                            <div class="grid xsmin:grid-cols-2 xxs:grid-cols-1 gap-6">
                            <div class="flex flex-col gap-4 ">
                            <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                            <div>
                            <p class="font-sans text-color-charcoal-900 text-base">Media Requests</p>
                            <a class="font-sans text-color-charcoal-600 text-sm leading-5 underline" href="mailto:betsy@coindesk.com">betsy@coindesk.com</a></div>
                            </div>
                            <div class="flex flex-col gap-4 ">
                            <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                            <div>
                            <p class="font-sans text-color-charcoal-900 text-base">Events</p>
                            <a class="font-sans text-color-charcoal-600 text-sm leading-5 underline" href="mailto:events@coindesk.com">events@coindesk.com</a></div>
                            </div>
                            <div class="flex flex-col gap-4 ">
                            <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                            <div>
                            <p class="font-sans text-color-charcoal-900 text-base">Advertising</p>
                            <a class="font-sans text-color-charcoal-600 text-sm leading-5 underline" href="mailto:advertising@coindesk.com">advertising@coindesk.com</a></div>
                            </div>
                            <div class="flex flex-col gap-4 ">
                            <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                            <div>
                            <p class="font-sans text-color-charcoal-900 text-base">Content Licensing</p>
                            <a class="font-sans text-color-charcoal-600 text-sm leading-5 underline" href="mailto:contentlicensing@coindesk.com">contentlicensing@coindesk.com</a></div>
                            </div>
                            <div class="flex flex-col gap-4 ">
                            <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                            <div>
                            <p class="font-sans text-color-charcoal-900 text-base">DESK Support</p>
                            <a class="font-sans text-color-charcoal-600 text-sm leading-5 underline" href="mailto:desk@coindesk.com">desk@coindesk.com</a></div>
                            </div>
                            <div class="flex flex-col gap-4 ">
                            <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                            <div>
                            <p class="font-sans text-color-charcoal-900 text-base">Careers</p>
                            <a class="font-sans text-color-charcoal-600 text-sm leading-5 underline" href="mailto:talent@coindesk.com">talent@coindesk.com</a></div>
                            </div>
                            <div class="flex flex-col gap-4 col-span-full">
                            <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                            <div>
                            <p class="font-sans text-color-charcoal-900 text-base">Mailing Address</p>
                            <p class="font-sans text-color-charcoal-600 text-sm leading-5">169 Madison Ave STE 2635, New York, NY, 10016</p>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="flex flex-col gap-6">
                            <div class="basis-full border-solid border-t border-charcoal-600">&nbsp;</div>
                            <p class="font-sans text-color-charcoal-600 text-sm leading-5 font-semibold uppercase">Follow Us</p>
                            <div class="grid xsmin:grid-cols-2 xxs:grid-cols-1 gap-6">
                            <div class="flex flex-col gap-4">
                            <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                            <div>
                            <div class="flex gap-4">
                            <div class="flex items-center justify-center w-6 h-6 rounded-3xl bg-[#F4F4F4]">&nbsp;</div>
                            <p class="font-sans text-color-charcoal-900 text-base">X</p>
                            </div>
                            <div class="flex flex-col"><a class="font-sans text-color-charcoal-600 text-sm leading-5 underline ml-10" href="https://twitter.com/CoinDesk" target="_blank" rel="noopener">@CoinDesk</a><a class="font-sans text-color-charcoal-600 text-sm leading-5 underline ml-10" href="https://twitter.com/CoinDeskData" target="_blank" rel="noopener">@CoinDeskData</a><a class="font-sans text-color-charcoal-600 text-sm leading-5 underline ml-10" href="https://twitter.com/CoinDeskMarkets" target="_blank" rel="noopener">@CoinDeskMarkets</a></div>
                            </div>
                            </div>
                            <div class="flex flex-col gap-4">
                            <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                            <div>
                            <div class="flex gap-4">
                            <div class="flex items-center justify-center w-6 h-6 rounded-3xl bg-[#F4F4F4]">&nbsp;</div>
                            <p class="font-sans text-color-charcoal-900 text-base">Facebook</p>
                            </div>
                            <div class="flex flex-col"><a class="font-sans text-color-charcoal-600 text-sm leading-5 underline ml-10" href="https://facebook.com/coindesk" target="_blank" rel="noopener">@coindesk</a></div>
                            </div>
                            </div>
                            <div class="flex flex-col gap-4">
                            <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                            <div>
                            <div class="flex gap-4">
                            <div class="flex items-center justify-center w-6 h-6 rounded-3xl bg-[#F4F4F4]">&nbsp;</div>
                            <p class="font-sans text-color-charcoal-900 text-base">Linkedin</p>
                            </div>
                            <div class="flex flex-col"><a class="font-sans text-color-charcoal-600 text-sm leading-5 underline ml-10" href="https://linkedin.com/company/coindesk" target="_blank" rel="noopener">CoinDesk</a></div>
                            </div>
                            </div>
                            <div class="flex flex-col gap-4">
                            <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                            <div>
                            <div class="flex gap-4">
                            <div class="flex items-center justify-center w-6 h-6 rounded-3xl bg-[#F4F4F4]">&nbsp;</div>
                            <p class="font-sans text-color-charcoal-900 text-base">RSS Feed</p>
                            </div>
                            <div class="flex flex-col"><a class="font-sans text-color-charcoal-600 text-sm leading-5 underline ml-10" href="https://www.coindesk.com/arc/outboundfeeds/rss/" target="_blank" rel="noopener">CoinDesk</a></div>
                            </div>
                            </div>
                            <div class="flex flex-col gap-4">
                            <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                            <div>
                            <div class="flex gap-4">
                            <div class="flex items-center justify-center w-6 h-6 rounded-3xl bg-[#F4F4F4]">&nbsp;</div>
                            <p class="font-sans text-color-charcoal-900 text-base">Instagram</p>
                            </div>
                            <div class="flex flex-col"><a class="font-sans text-color-charcoal-600 text-sm leading-5 underline ml-10" href="https://instagram.com/coindesk" target="_blank" rel="noopener">@coindesk</a></div>
                            </div>
                            </div>
                            <div class="flex flex-col gap-4">
                            <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                            <div>
                            <div class="flex gap-4">
                            <div class="flex items-center justify-center w-6 h-6 rounded-3xl bg-[#F4F4F4]">&nbsp;</div>
                            <p class="font-sans text-color-charcoal-900 text-base">YouTube</p>
                            </div>
                            <div class="flex flex-col"><a class="font-sans text-color-charcoal-600 text-sm leading-5 underline ml-10" href="https://www.youtube.com/coindesk" target="_blank" rel="noopener">CoinDesk</a></div>
                            </div>
                            </div>
                            <div class="flex flex-col gap-4">
                            <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                            <div>
                            <div class="flex gap-4">
                            <div class="flex items-center justify-center w-6 h-6 rounded-3xl bg-[#F4F4F4]">&nbsp;</div>
                            <p class="font-sans text-color-charcoal-900 text-base">TikTok</p>
                            </div>
                            <div class="flex flex-col"><a class="font-sans text-color-charcoal-600 text-sm leading-5 underline ml-10" href="https://www.tiktok.com/@coindesk/" target="_blank" rel="noopener">@coindesk</a></div>
                            </div>
                            </div>
                            <div class="flex flex-col gap-4">
                            <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                            <div>
                            <div class="flex gap-4">
                            <div class="flex items-center justify-center w-6 h-6 rounded-3xl bg-[#F4F4F4]">&nbsp;</div>
                            <p class="font-sans text-color-charcoal-900 text-base">Discord</p>
                            </div>
                            <div class="flex flex-col"><a class="font-sans text-color-charcoal-600 text-sm leading-5 underline ml-10" href="https://discord.com/invite/tRuUMkkQd9" target="_blank" rel="noopener">@coindesk</a></div>
                            </div>
                            </div>
                            <div class="flex flex-col gap-4">
                            <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                            <div>
                            <div class="flex gap-4">
                            <div class="flex items-center justify-center w-6 h-6 rounded-3xl bg-[#F4F4F4]">&nbsp;</div>
                            <p class="font-sans text-color-charcoal-900 text-base">Telegram</p>
                            </div>
                            <div class="flex flex-col"><a class="font-sans text-color-charcoal-600 text-sm leading-5 underline ml-10" href="https://t.me/CoinDeskGlobal" target="_blank" rel="noopener">CoinDeskGlobal</a></div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </section>',
            //-------------------------------
           'mail_layout'=> ' <!DOCTYPE html>
                            <html>
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title></title>
                                <style>
                                    body {
                                        background-color: #eef3ff;
                                        font-family: Arial, sans-serif;
                                        margin: 0;
                                        padding: 0;
                                    }
                                    .container {
                                        max-width: 600px;
                                        margin: 30px auto;
                                        background-color: #ffffff;
                                        border-radius: 8px;
                                        overflow: hidden;
                                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                                    }
                                    .header {
                                        background-color: #321dff;
                                        color: #ffffff;
                                        text-align: center;
                                        padding: 20px;
                                        font-size: 24px;
                                    }
                                    .logo {
                                        display: block;
                                        margin: 20px auto;
                                        max-width: 150px;
                                    }
                                    .content {
                                        padding: 20px;
                                        text-align: center;
                                    }
                                    .content h2 {
                                        color: #321dff;
                                    }
                                    .button {
                                        display: inline-block;
                                        background-color: #321dff;
                                        color: #ffffff;
                                        padding: 12px 20px;
                                        text-decoration: none;
                                        border-radius: 5px;
                                        font-size: 16px;
                                        margin-top: 20px;
                                    }
                                    a {
                                        color:white;
                                    }
                                    .footer {
                                        text-align: center;
                                        padding: 15px;
                                        font-size: 14px;
                                        color: #666;
                                    }
                                </style>
                            </head>
                            <body>
                                <div class="container">
                                    <img src="/logo.png" alt="Logo" class="logo">
                                    <div class="content">
                                        <h2>[mail_subject]</h2>
                                        [mail_body]
                                    </div>
                                    <div class="footer">
                                        &copy; 2025 100xinsider. All rights reserved.
                                    </div>
                                </div>
                            </body>
                            </html>',
           'login_subject' => 'Account Login',
            'login_mail' => '<!DOCTYPE html>
                            <html>
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title></title>
                                <style>
                                    body {
                                        background-color: #eef3ff;
                                        font-family: Arial, sans-serif;
                                        margin: 0;
                                        padding: 0;
                                    }
                                    .container {
                                        max-width: 600px;
                                        margin: 30px auto;
                                        background-color: #ffffff;
                                        border-radius: 8px;
                                        overflow: hidden;
                                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                                    }
                                    .header {
                                        background-color: #321dff;
                                        color: #ffffff;
                                        text-align: center;
                                        padding: 20px;
                                        font-size: 24px;
                                    }
                                    .logo {
                                        display: block;
                                        margin: 20px auto;
                                        max-width: 150px;
                                    }
                                    .content {
                                        padding: 20px;
                                        text-align: center;
                                    }
                                    .content h2 {
                                        color: #321dff;
                                    }
                                    .button {
                                        display: inline-block;
                                        background-color: #321dff;
                                        color: #ffffff;
                                        padding: 12px 20px;
                                        text-decoration: none;
                                        border-radius: 5px;
                                        font-size: 16px;
                                        margin-top: 20px;
                                    }
                                    a {
                                        color:white;
                                    }
                                    .footer {
                                        text-align: center;
                                        padding: 15px;
                                        font-size: 14px;
                                        color: #666;
                                    }
                                </style>
                            </head>
                            <body>
                                <div class="container">
                                    <img src="/logo.png" alt="Logo" class="logo">
                                    <div class="content">
                                        <h2>Account Login</h2>
                                        <p>We noticed a new login to your account. If this was you, no further action is needed.</p>
                                        <p>If you did not log in, please reset your password immediately.</p>
                                        <a href="[url]" class="button">Secure My Account</a>
                                    </div>
                                    <div class="footer">
                                        &copy; 2025 100xinsider. All rights reserved.
                                    </div>
                                </div>
                            </body>
                            </html>',
            'register_subject'=> 'Account Signup',
            'register_mail'=> '<!DOCTYPE html>
                            <html>
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title></title>
                                <style>
                                    body {
                                        background-color: #eef3ff;
                                        font-family: Arial, sans-serif;
                                        margin: 0;
                                        padding: 0;
                                    }
                                    .container {
                                        max-width: 600px;
                                        margin: 30px auto;
                                        background-color: #ffffff;
                                        border-radius: 8px;
                                        overflow: hidden;
                                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                                    }
                                    .header {
                                        background-color: #321dff;
                                        color: #ffffff;
                                        text-align: center;
                                        padding: 20px;
                                        font-size: 24px;
                                    }
                                    .logo {
                                        display: block;
                                        margin: 20px auto;
                                        max-width: 150px;
                                    }
                                    .content {
                                        padding: 20px;
                                        text-align: center;
                                    }
                                    .content h2 {
                                        color: #321dff;
                                    }
                                    .button {
                                        display: inline-block;
                                        background-color: #321dff;
                                        color: #ffffff;
                                        padding: 12px 20px;
                                        text-decoration: none;
                                        border-radius: 5px;
                                        font-size: 16px;
                                        margin-top: 20px;
                                    }
                                    a {
                                        color:white;
                                    }
                                    .footer {
                                        text-align: center;
                                        padding: 15px;
                                        font-size: 14px;
                                        color: #666;
                                    }
                                </style>
                            </head>
                            <body>
                                <div class="container">
                                    <img src="/logo.png" alt="Logo" class="logo">
                                    <div class="content">
                                        <h2>Account Signup</h2>
                                         <p>Welcome to our platform! Your account has been successfully created.</p>
                                        <p>To get started, please verify your email by clicking the button below.</p>
                                        <a style="color:white;" href="[url]" class="button" >Access Account</a>
                                    </div>
                                    <div class="footer">
                                        &copy; 2025 100xinsider. All rights reserved.
                                    </div>
                                </div>
                            </body>
                            </html>',
            'reset_subject'=> 'Account Reset',
            'reset_mail'=> '<!DOCTYPE html>
                            <html>
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title></title>
                                <style>
                                    body {
                                        background-color: #eef3ff;
                                        font-family: Arial, sans-serif;
                                        margin: 0;
                                        padding: 0;
                                    }
                                    .container {
                                        max-width: 600px;
                                        margin: 30px auto;
                                        background-color: #ffffff;
                                        border-radius: 8px;
                                        overflow: hidden;
                                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                                    }
                                    .header {
                                        background-color: #321dff;
                                        color: #ffffff;
                                        text-align: center;
                                        padding: 20px;
                                        font-size: 24px;
                                    }
                                    .logo {
                                        display: block;
                                        margin: 20px auto;
                                        max-width: 150px;
                                    }
                                    .content {
                                        padding: 20px;
                                        text-align: center;
                                    }
                                    .content h2 {
                                        color: #321dff;
                                    }
                                    .button {
                                        display: inline-block;
                                        background-color: #321dff;
                                        color: #ffffff;
                                        padding: 12px 20px;
                                        text-decoration: none;
                                        border-radius: 5px;
                                        font-size: 16px;
                                        margin-top: 20px;
                                    }
                                    a {
                                        color:white;
                                    }
                                    .footer {
                                        text-align: center;
                                        padding: 15px;
                                        font-size: 14px;
                                        color: #666;
                                    }
                                </style>
                            </head>
                            <body>
                                <div class="container">
                                    <img src="/logo.png" alt="Logo" class="logo">
                                    <div class="content">
                                        <h2>Account Reset</h2>
                                        <p>You recently requested to reset your password. </p>
                                        <p>Your new password had been generated for you.</p>
                                        <span class="button">[password]</span>"
                                    </div>
                                    <div class="footer">
                                        &copy; 2025 100xinsider. All rights reserved.
                                    </div>
                                </div>
                            </body>
                            </html>',
            'activate_newsletter_subject' => 'Activate Subscription',
            'activate_newsletter_mail'=> '<!DOCTYPE html>
                            <html>
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title></title>
                                <style>
                                    body {
                                        background-color: #eef3ff;
                                        font-family: Arial, sans-serif;
                                        margin: 0;
                                        padding: 0;
                                    }
                                    .container {
                                        max-width: 600px;
                                        margin: 30px auto;
                                        background-color: #ffffff;
                                        border-radius: 8px;
                                        overflow: hidden;
                                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                                    }
                                    .header {
                                        background-color: #321dff;
                                        color: #ffffff;
                                        text-align: center;
                                        padding: 20px;
                                        font-size: 24px;
                                    }
                                    .logo {
                                        display: block;
                                        margin: 20px auto;
                                        max-width: 150px;
                                    }
                                    .content {
                                        padding: 20px;
                                        text-align: center;
                                    }
                                    .content h2 {
                                        color: #321dff;
                                    }
                                    .button {
                                        display: inline-block;
                                        background-color: #321dff;
                                        color: #ffffff;
                                        padding: 12px 20px;
                                        text-decoration: none;
                                        border-radius: 5px;
                                        font-size: 16px;
                                        margin-top: 20px;
                                    }
                                    a {
                                        color:white;
                                    }
                                    .footer {
                                        text-align: center;
                                        padding: 15px;
                                        font-size: 14px;
                                        color: #666;
                                    }
                                </style>
                            </head>
                            <body>
                                <div class="container">
                                    <img src="/logo.png" alt="Logo" class="logo">
                                    <div class="content">
                                        <h2>Activate Newsletter</h2>
                                        <p>Welcome to our newsletter! Your subscription is successfully created.</p>
                                        <p>To get started, please verify your email by clicking the button below.</p>
                                        <a href="[url]" class="button">Activate</a>
                                    </div>
                                    <div class="footer">
                                        &copy; 2025 100xinsider. All rights reserved.
                                    </div>
                                </div>
                            </body>
                            </html>',
            
            //-------------------------------
            'top_left_article' => $a19->id,
            'top_right_article' => $video->id,
            'second_left'=> $cat1->id,
            'second_right'=> $cat10->id,
            'third_section'=> $cat11->id,
            'fourth_section'=> $cat7->id,
            'fifth_section'=> $cat8->id,
            
            //-------------------------------
            'news_section'=> 'News & Section',
            'news'=> 'News',
            'prices'=> null,
            'concensus'=> 'Concensus',
            'sponsored'=> 'Sponsored',
            'videos'=> 'Videos',
            'podcasts'=> 'Podcasts',
            'newsletters'=> 'Newsletters',
            'webinar'=> 'Webinar & Events',
             //-------------------------------
            'footer_info'=> '<div class="grid grid-cols-2 gap-8 lg:grid-cols-6">
                            <div class="column">
                            <p class="font-title text-sm break-keep uppercase leading-[1.5] tracking-[0.1px] text-[#1A1A1A]">About</p>
                            <ul class="column-items mt-6 font-serif">
                            <li class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline"><a href="about-us" aria-label="About Us">About Us</a></li>
                            <li class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline"><a href="masthead" aria-label="Masthead">Masthead</a></li>
                            <li class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline"><a href="cookie" target="_blank" rel="noopener">Cookie</a></li>
                            <li class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline"><a>100xinsider News</a></li>
                            </ul>
                            </div>
                            <div class="column">
                            <p class="font-title text-sm break-keep uppercase leading-[1.5] tracking-[0.1px] text-[#1A1A1A]">Contact</p>
                            <ul class="column-items mt-6 font-serif">
                            <li class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline"><a href="contact" aria-label="Contact Us">Contact Us</a></li>
                            <li class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline"><a href="accessibility" aria-label="Accessibility">Accessibility</a></li>
                            <li class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline"><a href="advertise" aria-label="Advertise">Advertise</a></li>
                            <li class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline"><a href="sitemap">Sitemap</a></li>
                            </ul>
                            </div>
                            <div class="col-span-4 flex flex-col gap-4">
                            <div class="font-title uppercase text-sm text-[#1A1A1A] leading-none">DISCLOSURE &amp; POLICES</div>
                            <div class="font-metadata leading-[1.5] tracking-[0.4px] text-[#676767]">
                            <p>100xinsider is an award-winning media outlet that covers the cryptocurrency industry. Its journalists abide by a strict set of editorial policies. 100xinsider has adopted a set of principles aimed at ensuring the integrity, editorial independence and freedom from bias of its publications. 100xinsider is part of the Bullish group, which owns and invests in digital asset businesses and digital assets. 100xinsider employees, including journalists, may receive Bullish group equity-based compensation. Bullish was incubated by technology investor Block.one</p>
                            </div>
                            <div class="flex-start flex flex-wrap gap-x-4 gap-y-2 self-stretch"><span class="font-metadata item-link cursor-pointer break-keep pb-2 leading-[1.5] tracking-[0.1px] text-[#1A1A1A] hover:underline"><a href="ethics" aria-label="Ethics">Ethics</a></span><span class="font-metadata item-link cursor-pointer break-keep pb-2 leading-[1.5] tracking-[0.1px] text-[#1A1A1A] hover:underline"><a href="privacy" aria-label="Privacy">Privacy</a></span><span class="font-metadata item-link cursor-pointer break-keep pb-2 leading-[1.5] tracking-[0.1px] text-[#1A1A1A] hover:underline"><a href="terms" aria-label="Terms of Use">Terms of Use</a></span><span class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-black hover:underline"><a href="cookie">Cookie Consent</a></span><span class="font-metadata item-link cursor-pointer break-keep pb-2 leading-[1.5] tracking-[0.1px] text-[#1A1A1A] hover:underline"><a href="sell-info">Do Not Sell My Info</a></span></div>
                            </div>
                            </div>',
            'footer_name'=> '© 2025 100xinsider',
            'do_not_sell'=> '<section class="flex-grow" data-module-name="page" data-module-version="1.0.0" data-module-instance="default">
                                <div class="container">
                                <div class="w-full flex flex-col gap-8 md:max-w-[680px] m-auto">
                                <h1 class="text-color-black font-headline-lg font-medium">Privacy</h1>
                                <div class="document-body  font-body-lg"><small class="font-body-sm text-[#676767] leading-[1.3125rem]"><span style="text-decoration: underline;">Effective Date:</span> May 5, 2022.</small>
                                <p>&nbsp;</p>
                                <p>CoinDesk, Inc., including any affiliates and subsidiaries (&ldquo;CoinDesk,&rdquo; &ldquo;we,&rdquo; &ldquo;us,&rdquo; or &ldquo;our&rdquo;) values the trust you place in us when you use our affiliated websites and online services (collectively, our &ldquo;Websites&rdquo;). This Privacy Policy describes our collection, use, disclosure, and retention of information we collect from or about you. This Privacy Policy applies to our Websites that post or link to it, regardless of how you access or use them, including through mobile devices.</p>
                                <p>BY USING OUR WEBSITES, YOU ARE ACCEPTING THE TERMS OF THIS PRIVACY POLICY AND OUR <a href="https://www.coindesk.com/terms/">TERMS OF USE</a>, AND YOU ARE CONSENTING TO OUR COLLECTION, USE, DISCLOSURE, AND RETENTION OF INFORMATION AS DESCRIBED IN THIS PRIVACY POLICY.</p>
                                <p>If you do not agree to the terms of this Privacy Policy, please do not use our Websites. We may make changes to this Privacy Policy from time to time. We will post any changes to our Websites. Your continued use of our Websites following the posting of any changes will mean you accept those changes.</p>
                                <p>This Privacy Policy does not apply to information that you may submit to third-party websites or mobile applications that may link to the Websites or be linked to on the Websites. We are not responsible for the actions or privacy practices of third-party websites and applications; please consult those websites and applications directly to understand their privacy practices.</p>
                                <p><strong>INFORMATION WE COLLECT ABOUT YOU</strong></p>
                                <p>We collect, process, and retain information from you and any devices you may use when you use or interact with our Websites, and in other ways described below.</p>
                                <p><strong>Information You Give Us:</strong> We receive and store information provided to us or given to us in any other way, including your: name, mailing address, phone number, email address, picture, date of birth, payment information, registration information, social media and messaging platform handle, optional biographic and demographic information, processional and licensure information, information for wallets you create or connect via our Websites, survey responses, and any other information that you voluntarily provide. This includes information that you share with us on third-party websites and platforms.</p>
                                <p>If you apply for a job on our Websites, we will collect your name, contact information, resume/CV and cover letter, information from your LinkedIn Profile or website, and whether you require sponsorship for employment within the U.S. You will also have the opportunity to provide voluntary demographic and self-identification information; this information is not required and is not used for any employment decisions.</p>
                                <p><strong>Information We Automatically Collect:</strong> We receive and store certain types of information whenever you use our Websites. Our Websites may use &ldquo;cookies,&rdquo; tagging and other tracking technologies to help enable us to enhance or personalize your online experience. This information includes computer and connection information such as statistics on your page views, traffic to and from our Websites, referral URL, ad data, your IP address, device identifiers, transaction history, and your web log information. When you have any DESK tokens or a wallet connected to your account, we will also have information on the associated transfers, balances, transactions, and ledger.</p>
                                <p><strong>Location Information:</strong> When you visit our Websites or interact with our online services, we may receive information about your location and your device, including a unique identifier for your device. Location information allows us to provide location-based services, such as advertising and other personalized content. In addition, if you scan one of our QR codes, we will know the event, venue, or business associated with that code and, thus, your location at the time you scan the QR code.</p>
                                <p><strong>Information From Social Media:</strong> When you interact with us or our Websites on a social media platform, we may collect the personal information that you make available to us, including your account ID, username, and other information included in your posts. If you choose to log into your account with or through a social networking service, we and that service may share certain information about you and your activities. When you give us permission, we may also collect information from your social media account on your behalf.</p>
                                <p><strong>Information From Other Sources:</strong> We may supplement the information we collect with information offline or from third parties.</p>
                                <p><strong>HOW WE USE INFORMATION WE COLLECT FROM OR ABOUT YOU</strong></p>
                                <p>We use the information we collect from or about you to help us personalize and continually improve your experience on the Websites, including providing our services and conferences, responding to requests for information, analyzing and compiling trends and statistics, and communicating with you. For information about how to manage information about you and the choices you have, see the <strong>Your Choices</strong> section below.</p>
                                <p>We also may use information about you to: provide, maintain, and improve the Websites and for internal or other business purposes; run and administer our virtual and in-personal conferences; fulfill your requests for information; communicate with you; detect, investigate, and prevent activities that may violate our policies or be fraudulent or illegal; optimize, perform analysis, or improve our Websites, products, services, and operations; provide, produce, and ship the products that you order or the services you request; provide customer support; send you offers or other communications about our products and services, such as special or promotional events, including services, products, or events for which we collaborate or co-offer with a third party; administer contests, sweepstakes, promotions, and surveys; and to post user generated content provided by users.</p>
                                <p><strong>DESK Program:</strong> If you provide your wallet address as part of our DESK Program, we will not use or otherwise analyze your wallet address for any purpose other than to provide the DESK Program to you. As discussed below, your wallet address may be shared by our DESK Program with our program partners, sponsors, or service providers in order to enable or provide a program benefit that you have earned or redeemed. We contractually prohibit these third parties from using your wallet information for any purpose other than providing such benefits, and we require them to delete the data once the benefit has been provided. Your wallet address shared with the DESK Program will never be used by us for any of our journalistic or news reporting functions.</p>
                                <p>We may use the information from one portion of the Websites on other portions of the Websites, and we may combine information gathered from multiple portions of the Websites. We also may use or combine information that we collect offline, or that we collect or receive from third-party sources for many reasons, including to enhance, expand, and check the accuracy of our records. Additionally, we may use information collected from a particular browser or device with another computer or device that is linked to the browser or device on which such information was collected.</p>
                                <p>We may retain information we collect from or about you for as long as reasonably required to satisfy the purposes for which we have collected the information, or as required by law, whichever is longer. This means we will retain information about you both while you are an active user of our Websites and after you cease to be an active user.</p>
                                <p><strong>HOW WE SHARE YOUR INFORMATION WITH OTHERS</strong></p>
                                <p>We share information we collect from or about you with third parties as described below. In addition, we may share information that does not personally identify you, such as aggregate information, de-identified information, device identifiers, or other unique identifiers with third parties. For information about how to manage information about you and the choices you have, see the <strong>Your Choices</strong> section below.</p>
                                <p><strong>Third-Party Service Providers:</strong> We engage third-party service providers to perform functions on our behalf such as: hosting, content syndication, content management, technical integration, marketing, analytics, customer service, fraud protection, payment processing, fulfillment, and shipping. These third parties may have access to information about you when needed to perform their functions.</p>
                                <p><strong>Business Partners:</strong> We may share information that personally identifies you with business partners who provide products and services that we think you may be interested in.</p>
                                <p><strong>Sale, Assignment or Change of Control:</strong> We may change our ownership or corporate organization while providing the Websites. We may transfer some or all information about you in connection with, or during negotiations of, any merger, acquisition, sale of assets, or any line of business, change in ownership control, or financing transaction. Under such circumstances, we will request the acquiring party to follow the practices described in this Privacy Policy with respect to previously collected information. Nevertheless, we cannot promise that an acquiring party or the merged entity will have the same privacy practices or treat information about you in the same way as described in this Privacy Policy.</p>
                                <p><strong>Law Enforcement, Legal Process, and Emergency Situations:</strong> We may also use or disclose information we collect from or about you if required to do so by law or on the good-faith belief that such action is necessary to (a) conform to applicable law or comply with legal process served on us or our Websites; (b) protect and defend our rights or property, the Websites, or our users; (c) respond to a third party that alleges that you have infringed their intellectual property rights; or (d) act to protect the personal safety of us, users of the Websites, or the public.</p>
                                <p><strong>Public Areas, Interactive Features and Activities:</strong> Please remember that any information you share in public areas, including in your public profile, or on social sharing features becomes public and anyone may take and use that information. Please be careful about what you disclose and do not post any information that you expect to keep private. Please consult the applicable guidelines, if any, for use of these features. We cannot control who views information that you post in public areas of the Websites or on third-party messaging platforms, like Discord, and are not responsible for how third parties, including other users may use or disclose information that you post or otherwise share with other users or third parties. If you are under the age of eighteen and a registered user, you may have a content or information you have posted removed from public display by deleting the message yourself or contacting the community manager.</p>
                                <p><strong>At Your Direction:</strong> Our Websites may give you the ability to share certain information with other users or other third parties, such as by scanning your &ldquo;My Code.&rdquo; When you engage these features on our Websites, you are authorizing us to share your information. Once shared, we have no control how those third parties will use or further disclose your information.</p>
                                <p><strong>HOW TO ACCESS AND UPDATE YOUR INFORMATION</strong></p>
                                <p>If you have an account with us, you can update information you have provided by logging into your account and editing the information. Please note that you may not be able to change some information, like your username or email, after your account is established. You may be required to provide us with sufficient information to verify your identity prior to accessing any records containing information about you. We may not accommodate a request to change information about you if we believe doing so would violate any law or legal requirement or cause the information to be incorrect.</p>
                                <p><strong>COOKIES AND OTHER TRACKING TECHNOLOGIES</strong></p>
                                <p>Like many websites, we use tracking technologies such as cookies, web beacons, and similar technologies to record your preferences, track the use of our Websites, your interactions with our emails, and measure exposure to our online advertisements. We may also use these technologies to monitor traffic, improve the Websites, and make it easier to use and more relevant. Most web browsers automatically accept cookies but, if you prefer, you can usually modify your browser setting to disable or reject cookies. In addition, you may also render some web beacons unusable by rejecting or removing their associated cookies. If you delete your cookies or if you set your browser to decline cookies, some features of the Websites may not work or may not work as designed.</p>
                                <p>We use third-party analytics services on the Websites, including Google Analytics. These analytics service providers use cookies or other tracking technologies to help us analyze how users interact with and use our Websites, compile reports about activity on Websites, and provide us other services. The technologies may collect information such as your IP address, time of visit, whether you are a return visitor, any referring website, general location, and other information. We do not use these analytics service providers to gather information that personally identifies you. The information generated by Google Analytics will be transmitted to and stored by Google and will be subject to Google&rsquo;s <a href="http://www.google.com/policies/privacy/" target="_blank" rel="noopener">privacy policies</a>. To learn more about Google&rsquo;s partner services and to learn how to opt out of tracking of analytics by Google click <a href="https://www.google.com/policies/privacy/partners/" target="_blank" rel="noopener">here</a>.</p>
                                <p>We work with third-party companies who also use these technologies to provide advertisements on our Websites and other third-party websites. These third parties may use these technologies to collect information about you when you use the Websites. They may collect information about your online activities over time and across different websites and other online services. They may also use persistent identifiers to track your Internet usage across other websites in their networks beyond our Websites. They may use this information to provide you with interest-based advertising or other targeted content. While we do not knowingly provide these entities with information that personally identifies you, such third parties may, with sufficient data from other sources, be able to personally identify you, unknown to us. More information about how to opt-out of these cookies is available in the <strong>Choices</strong> section below.</p>
                                <p>The cookies used on our Websites are divided into four general categories:</p>
                                <p><em>Necessary:</em> Cookies that are essential to make our Websites usable by enabling basic functions like page navigation, access to secures areas of the Website, and whether you have opted-out of certain non-necessary cookies. The Websites cannot function properly without these cookies. These mandatory cookies cannot be de-selected from our consent manager.</p>
                                <p><em>Preferences:</em> Cookies that enable our Websites to remember information that changes the way the Websites behaves or looks, like your preferred language or region that you are in.</p>
                                <p><em>Analytics and Statistics:</em> Cookies that help us understand how visitors interact with our Websites by collecting and reporting about your device&rsquo;s interactions.</p>
                                <p><em>Marketing:</em> Used to track devices across websites to display ads that are relevant and engaging to our visitors to show you our ads on third-party websites. You may also deny or delete these cookies via your browser settings.</p>
                                <p>Some content, applications, and advertisements on the Websites may be served by unaffiliated third parties. We do not control these third parties&rsquo; tracking technologies or how they may be used. We are not responsible for the content or privacy practices on any website not operated by us to which our Websites links or that links to our Websites.</p>
                                <p>Your browser or device may include &ldquo;Do Not Track&rdquo; functionality. Our information collection, disclosure practices, and the choices that we provide, will continue to operate as described in this Privacy Policy, whether or not a Do Not Track signal is received.</p>
                                <p><strong>YOUR CHOICES ABOUT HOW INFORMATION ABOUT YOU IS USED AND SHARED</strong></p>
                                <p>In many instances, you have choices about the information you provide and how we use that information. These choices are described below. California residents and data subjects in Europe have additional rights as set forth in the sections entitled <strong>Notice to Residents of California</strong> and <strong>Notice to Residents of the European Economic Area, Switzerland, and United Kingdom</strong> below.</p>
                                <p><strong>Marketing Emails:</strong> By providing us with an e-mail address, you acknowledge that we may use your e-mail address to communicate with you. While you cannot opt-out of receiving notifications and other service-related communications regarding your account or your transactions, you can opt-out of receiving promotional and other marketing emails from us by using the &ldquo;unsubscribe&rdquo; feature in our marketing e-mails.</p>
                                <p><strong>Text Messages:</strong> If you have opted-in to one of our text messages programs, you can opt-out at any time by replying &ldquo;STOP&rdquo; at any time.</p>
                                <p><strong>Interest-Based Advertising Choices:</strong> You also have choices related to interest-based advertising. Many browsers automatically accept cookies, but you can usually modify your browser&rsquo;s setting to decline cookies if you prefer. Note that if you choose to remove cookies, you may remove opt-out cookies that affect your advertising preferences.</p>
                                <p>Many of the third-party advertisers that place tracking tools on our Websites are members of programs that offer you additional choices regarding the use of information about you for advertising. You can learn more about the options available to limit these third parties&rsquo; use of your information by visiting the websites for the <a href="http://www.networkadvertising.org/choices/" target="_blank" rel="noopener">Network Advertising Initiative</a> and the <a href="http://www.aboutads.info/choices/" target="_blank" rel="noopener">Digital Advertising Alliance</a>.</p>
                                <p>Similarly, you can learn about your options to opt-out of mobile app tracking by certain advertising networks through your device settings. For more information about how to change these settings, see the support information for <a href="https://support.apple.com/en-us/HT205223" target="_blank" rel="noopener">Apple</a>, <a href="https://policies.google.com/technologies/ads" target="_blank" rel="noopener">Android</a> or <a href="http://choice.microsoft.com/en-US/opt-out" target="_blank" rel="noopener">Windows</a> devices.</p>
                                <p>Please note that opting-out of participating advertising networks services does not mean that you will not receive advertising while using our Websites or on other websites, nor will it prevent the receipt of interest-based advertising from third parties that do not participate in these industry programs.</p>
                                <p><strong>NOTICE TO RESIDENTS OF CALIFORNIA</strong></p>
                                <p>This section is part of our Privacy Policy but applies only to residents of California. State law provides you with certain rights to receive disclosure regarding the collection, use, and sharing of &ldquo;personal information,&rdquo; as well as rights to access, delete, and restrict the sale of certain personal information we collect about you. You or your authorized agent may submit a request to exercise these rights by sending us an email at <a href="mailto:privacy@coindesk.com" target="_blank" rel="noopener">privacy@coindesk.com</a>. You have the right not to receive discriminatory treatment for the exercise of the privacy rights conferred by applicable law.</p>
                                <p><strong>Collection and Use of Personal Information:</strong> The general sections of this Privacy Policy describe the types of personal information we collect, how we collect it, and how we use it. The following is a list of categories of personal information that we may have collected from or about consumers and the sources of that information:</p>
                                <p><em>Identifiers:</em> Name, alias, postal address, unique personal identifier, online identifier, IP address, email address, account name, or other similar identifiers. This information is provided by you, automatically collected when you interact with our Website, or is provided by a third party.</p>
                                <p><em>Customer records:</em> Name, address, telephone number, education, employment, or payment account number. This information is provided by you, automatically collected when you interact with our Website, or is provided by a third party.</p>
                                <p><em>Protected classifications:</em> Race, sexual orientation, gender identity, or disability. This information is provided by you, such as voluntarily disclosed as part of job application.</p>
                                <p><em>Commercial information:</em> Records of products or services purchased, obtained, or considered, or other purchasing or consuming histories or tendencies. This information is automatically collected based on your interactions with our Website, your purchases, and your subscriptions.</p>
                                <p><em>Internet or other electronic network activity information:</em> Browsing history, search history, and information regarding interactions with our Website or advertisements. This information is automatically collected when you interact with our Website, or is provided by a third party, such as an advertising or analytics provider.</p>
                                <p><em>Geolocation:</em> General or precise location information. This is provided by you when you provide you address or other location information, scan a QR code or check-in at a location, or inferred based on your IP address.</p>
                                <p><em>Professional and education data:</em> Employer, title, professional license numbers, work history, and educational background. This information is provided by you, such as your conference registration or job application, or is provided by a third party.</p>
                                <p><em>Inferences:</em> Information about your preferences, characteristics, predisposition, demographic info, attitudes, and favorites. This information is provided by you, automatically collected when you interact with our Website, or is provided by a third party.</p>
                                <p>We collect and use the above categories of personal information for the purposes described above in the sections entitled <strong>How We Use Information We Collect From or About You, How We Share Your Information with Others</strong>, and <strong>Cookies and Other Tracking Technologies</strong>. We limited disclosures of personal information for business purpose to services providers, as described above.</p>
                                <!--$-->
                                <div>
                                <div id="dnsmpi"></div>
                                </div>
                                <!--/$-->
                                <p><strong>Sale of Personal Information and Right to Opt Out:</strong> State law requires companies to include certain disclosures including a &ldquo;Do Not Sell My Personal Info&rdquo; links on their websites. We do not knowingly sell the personal information of consumers under 16 years of age. To opt out of the sale to third parties, please sending us an email at <a href="mailto:privacy@coindesk.com" target="_blank" rel="noopener">privacy@coindesk.com</a> and using the cookie manager on our Website to disable non-necessary cookies. Please note that your right to opt out does not apply to our sharing of data with service providers, with whom we work and who are required to use the data on our behalf.</p>
                                <p>The following categories of personal information that are disclosed for a business purpose or &ldquo;sold&rdquo; and the related categories of third parties:</p>
                                <p><em>Identifiers:</em> Name, email, unique personal identifiers, online identifiers, IP address, or other similar identifiers to affiliates, business partners, advertising and marketing companies, data analytics providers, and social networks.</p>
                                <p><em>Internet or other electronic network activity information:</em> info regarding your interaction with an internet website, application, or advertisement to affiliates, business partners, advertising and marketing companies, data analytics providers, and social networks.</p>
                                <p><strong>Rights Requests:</strong> As noted above, you have the right to request that we disclose what personal information we collect, use, and sell, as well as the right to request that we delete certain personal information that we have collected from you. You or your authorized agent may submit a request to exercise these rights <strong>by using our</strong>&nbsp;<a href="https://rfi.coindesk.com/"><strong>Request for Information</strong></a>&nbsp;<strong>or</strong>&nbsp;<a href="https://rfd.coindesk.com/"><strong>Request for Deletion</strong></a>&nbsp;<strong>tool or</strong> sending us an email at <a href="mailto:privacy@coindesk.com" target="_blank" rel="noopener">privacy@coindesk.com</a>. We will require you to verify your identity before we can act on your request. You are required to provide your name and email address, your cell phone number if you have sign-up to received text messages from us, or wallet address if you have linked that with your account to start the verification process.</p>
                                <p><strong>Financial Incentives:</strong> We may run promotions from time to time and ask you to share personal information with us. We will always give you clear notice about these types of programs when you sign up, and participation is always voluntary. If you change your mind, you will be able to opt out, and if you do not participate, you will still be able to use our services.</p>
                                <p><strong>California &ldquo;Shine the Light&rdquo; Rights:</strong> If you are a California resident and customer, California law permits you to request certain information regarding the disclosure of your information about you by us and our related companies to third parties for the third parties direct marketing purposes. To make such a request, please sending us an email at <a href="mailto:privacy@coindesk.com" target="_blank" rel="noopener">privacy@coindesk.com</a>.</p>
                                <p><strong>NOTICES TO RESIDENTS OF THE EUROPEAN ECONOMIC AREA, SWITZERLAND, AND UNITED KINGDOM</strong></p>
                                <p>This section is part of our Privacy Policy but applies only to residents of the European Economic Area (EEA), Switzerland, and United Kingdom. For purposes of data protection law, CoinDesk, Inc. is the controller.</p>
                                <p><strong>Purposes of Processing:</strong> As described in the other sections of our Privacy Policy, we process your personal data to administer our Websites, process your requests, facilitate access by our service providers and third parties, send marketing communications, respond to your requests in connection with employment opportunities, transfer or sell our business, to combine data sets, and for the other purposes set forth in our Privacy Policy. Also as explained above, we may also use, transfer, and otherwise use personal data acquired from you directly or by use of cookies or other tracking technologies to remember your preferences, conduct analytics, and serve you with advertising.</p>
                                <p><strong>Legal Basis:</strong> We have several different legal grounds on which we collect and process personal data, including (a) as necessary to perform a transaction (such as registering for a conference, subscribing to our newsletters, inquiring about employment, or responding to your requests); (b) as necessary to comply with a legal obligation; (c) where you have provided consent; and (d) necessary for legitimate interest when such processing is reasonably expected by you and does not unduly and negatively affect your privacy rights. If you would like to withdraw your consent, please use the options that are described in the <strong>Your Choices</strong> section above. Please keep in mind that additional basis my still exist for processing that is not based on your consent.</p>
                                <p><strong>Transfers:</strong> Your personal data may be transferred to and processed in the United States or elsewhere in the world that may not provide the same level of data protection as your home country. We will ensure that transfers of personal data are subject to appropriate safeguards in accordance with applicable legal requirements to ensure that your data is adequately protected.</p>
                                <p><strong>Your Rights:</strong> You have certain rights under applicable law. These rights include (1) to obtain information about the processing of your personal data and a copy of your personal data that we store; (2) to request that we update your personal data if it is inaccurate or incomplete; (3) to request the deletion of your personal data if it is no longer necessary for the purposes for which it was collected or if you withdraw consent and no other legal basis for processing exists; (4) to restrict the processing if you contest the accuracy of your personal data, if our processing is deemed unlawful and you oppose deletion, or if we no longer need the personal data but must store it to comply with our legal obligations; (5) to receive your personal data and to transfer it to another controller; (6) to object to our processing when we process your personal data based on legitimate interest; and (7) to lodge a complaint about our collection or processing of your personal data with your Data Protection Authority (DPA).</p>
                                <p>If you would like to exercise rights (1) through (6), please sending us an email at <a href="mailto:privacy@coindesk.com" target="_blank" rel="noopener">privacy@coindesk.com</a>. To verify your identity, we may require you to provide us with personal data prior to accessing any records about you. If you would like to file a complaint with your DPA, contact details for the DPAs in the EEA and UK are available at <a href="http://ec.europa.eu/justice/article-29/structure/data-protection-authorities/index_en.htm" target="_blank" rel="noopener">ec.europa.eu/justice/article-29/structure/data-protection-authorities/index_en.htm</a> and for Switzerland at <a href="https://www.edoeb.admin.ch/edoeb/en/home/the-fdpic/links/data-protection---switzerland.html" target="_blank" rel="noopener">https://www.edoeb.admin.ch/edoeb/en/home/the-fdpic/links/data-protection---switzerland.html</a>.</p>
                                <p>You are not required to provide all personal data identified in this Privacy Policy to use our Websites, purchase our services, or to interact with us offline, but certain functionality may not be available to you. If you do not provide your personal information, we may not be able to respond to your requests, perform a transaction with you, or provide you with marketing that we believe you would find valuable. We do not use automated decision-making without human intervention, including profiling, in a way that procedures legal effects concerning you or otherwise significantly affects you.</p>
                                <p><strong>OTHER IMPORTANT INFORMATION</strong></p>
                                <p><strong>Users Under Thirteen:</strong> Our Websites are intended for users ages thirteen and older only. If we become aware of information in our database that was collected from a child under thirteen, we will delete such information.</p>
                                <p><strong>Users Outside of the United States:</strong> If you use our Websites outside of the United States, you understand and consent to the transfer of information we collect from or about you to, and the collection, processing, and storage of information about you in, the United States and elsewhere. The laws in the U.S. and these countries may be different than the laws of your country.</p>
                                <p><strong>For questions about our Privacy Policy, you can contact us at</strong>&nbsp;<strong><a href="mailto:privacy@coindesk.com" target="_blank" rel="noopener">privacy@coindesk.com</a>.</strong></p>
                                <p>All rights reserved.</p>
                                </div>
                                </div>
                                </div>
                                </section>',
            'about'=>'<section class="flex-grow flex flex-wrap justify-center flex-col items-center" data-module-name="about" data-module-version="1.0.0" data-module-instance="default">
                            <h1 class="text-[0px]">About | CoinDesk</h1>
                            <div class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
                            <section class="pt-4 mdmax:w-full md:w-[680px] lg:w-[1032px] mx-auto flex flex-col">
                            <div class="flex mdmax:flex-col md:flex-row md:items-center md:pb-14 mdmax:pb-10">
                            <div class="pt-4 pb-4 lg:pb-8 mx-auto [&amp;_a]:text-link-dark-green [&amp;_a]:font-bold mdmax:w-full md:w-[680px] lg:w-[1032px]">
                            <div class="document-body  font-body-lg">
                            <p>CoinDesk is the most-trusted media, events, indices and data company for the global crypto economy. Since 2013, CoinDesk Media has led the story of the future of money and investing, illuminating the transformation in society and culture that comes with it. Our <a href="https://www.coindesk.com/business/2023/09/29/sam-bankman-fried-scoops-help-coindesk-win-major-journalism-award/">award-winning team</a> of journalists delivers news and unparalleled insights that bring transparency, comprehension and context. CoinDesk Events gathers the global crypto, blockchain and Web3 communities at annual events such as Consensus, the world&rsquo;s largest and longest-running crypto festival. CoinDesk Indices offers expertise in digital asset indices, data and research to educate and empower investors. For more information on CoinDesk media and events, please visit <a href="http://coindesk.com">coindesk.com</a> and for breaking headlines, data and indices visit <a href="http://coindeskmarkets.com">coindeskmarkets.com.</a></p>
                            </div>
                            </div>
                            </div>
                            <hr class="about-hr mb-14">
                            <div class="flex mdmax:flex-col md:flex-row md:items-center md:pb-14 mdmax:pb-10">
                            <div class="sm:block xs:block mdmax:w-full mdmax:mb-5 mdmax:shrink-0 md:w-[35%] lg:w-[30%] text-center sm:mr-7 sm:ml-0 mb-0"><picture class="about-picture1"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3b7261c6249f5b9348f0c76718c346747cbf7196-277x180.jpg 277w" type="image/webp" media="(min-width: 1024px)" sizes="(min-width: 1024px) 277px, 100vw"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3b7261c6249f5b9348f0c76718c346747cbf7196-277x180.jpg 277w" type="image/jpeg" media="(min-width: 1024px)" sizes="(min-width: 1024px) 277px, 100vw"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3b7261c6249f5b9348f0c76718c346747cbf7196-277x180.jpg 342w" type="image/webp" media="(min-width: 600px) and (max-width: 1023px)" sizes="(min-width: 600px) 342px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3b7261c6249f5b9348f0c76718c346747cbf7196-277x180.jpg 342w" type="image/jpeg" media="(min-width: 600px) and (max-width: 1023px)" sizes="(min-width: 600px) 342px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3b7261c6249f5b9348f0c76718c346747cbf7196-277x180.jpg 570w" type="image/webp" media="(max-width: 599px)" sizes="(max-width: 599px) 570px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3b7261c6249f5b9348f0c76718c346747cbf7196-277x180.jpg 570w" type="image/jpeg" media="(max-width: 599px)" sizes="(max-width: 599px) 570px"><img src="https://cdn.sanity.io/images/s3y3vcno/production/3b7261c6249f5b9348f0c76718c346747cbf7196-277x180.jpg" alt="CoinDesk Media" width="277" height="180" loading="lazy"></picture></div>
                            <div class="pt-4 pb-4 lg:pb-8 mx-auto [&amp;_a]:text-link-dark-green [&amp;_a]:font-bold md:w-[65%] lg:w-[70%]">
                            <div class="document-body  font-body-lg">
                            <p>CoinDesk Media runs one of the worlds largest cryptocurrency newsrooms, covering markets, policy, technology and more, and is known for its <a href="https://www.coindesk.com/business/2023/09/29/sam-bankman-fried-scoops-help-coindesk-win-major-journalism-award/">Loeb</a> and <a href="https://www.coindesk.com/business/2023/02/20/coindesk-wins-a-polk-award-a-top-journalism-prize-for-explosive-ftx-coverage/">Polk</a> awards-winning role in stopping Sam Bankman Frieds theft of customer assets at the FTX cryptocurrency exchange. Its journalists have been profiled by <a href="https://www.nytimes.com/2023/01/16/business/media/coindesk-ftx-cryptocurrency.html?smtyp=cur&amp;smid=tw-nytimes" target="_blank" rel="noopener">The New York Times</a>, <a href="https://www.businessinsider.com/how-coindesk-crypto-news-sites-navigating-economy-advertising-marketing-ftx-2022-11" target="_blank" rel="noopener">Business Insider,</a> <a href="https://www.cnn.com/2022/11/24/media/coindesk-scoop-ftx-reliable-sources/index.html" target="_blank" rel="noopener">CNN,</a> <a href="https://nymag.com/intelligencer/2022/12/sbf-ftx-crypto-coindesk.html" target="_blank" rel="noopener">New York Magazine,</a> <a href="https://www.theverge.com/2022/12/8/23498823/coindesk-ftx-dcg-barry-silbert-grayscale-genesis" target="_blank" rel="noopener">The Verge,</a> and <a href="https://www.theinformation.com/articles/how-coindesk-lit-the-fuse-that-blew-up-crypto-and-might-take-down-its-owner-next" target="_blank" rel="noopener">The Information</a> for their exceptional work.</p>
                            </div>
                            </div>
                            <div class="sm:hidden xs:hidden mdmax:w-full mdmax:mb-5 mdmax:shrink-0 md:w-[35%] lg:w-[30%] text-center sm:ml-7 sm:mr-0 mb-0"><picture class="about-picture1"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3b7261c6249f5b9348f0c76718c346747cbf7196-277x180.jpg 277w" type="image/webp" media="(min-width: 1024px)" sizes="(min-width: 1024px) 277px, 100vw"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3b7261c6249f5b9348f0c76718c346747cbf7196-277x180.jpg 277w" type="image/jpeg" media="(min-width: 1024px)" sizes="(min-width: 1024px) 277px, 100vw"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3b7261c6249f5b9348f0c76718c346747cbf7196-277x180.jpg 342w" type="image/webp" media="(min-width: 600px) and (max-width: 1023px)" sizes="(min-width: 600px) 342px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3b7261c6249f5b9348f0c76718c346747cbf7196-277x180.jpg 342w" type="image/jpeg" media="(min-width: 600px) and (max-width: 1023px)" sizes="(min-width: 600px) 342px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3b7261c6249f5b9348f0c76718c346747cbf7196-277x180.jpg 570w" type="image/webp" media="(max-width: 599px)" sizes="(max-width: 599px) 570px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3b7261c6249f5b9348f0c76718c346747cbf7196-277x180.jpg 570w" type="image/jpeg" media="(max-width: 599px)" sizes="(max-width: 599px) 570px"><img src="https://cdn.sanity.io/images/s3y3vcno/production/3b7261c6249f5b9348f0c76718c346747cbf7196-277x180.jpg" alt="CoinDesk Media" width="277" height="180" loading="lazy"></picture></div>
                            </div>
                            <hr class="about-hr mb-14">
                            <div class="flex mdmax:flex-col md:flex-row md:items-center md:pb-14 mdmax:pb-10">
                            <div class="sm:hidden xs:block mdmax:w-full mdmax:mb-5 mdmax:shrink-0 md:w-[35%] lg:w-[30%] text-center sm:mr-7 sm:ml-0 mb-0"><picture class="about-picture1"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/ce7895db0c8d611da00b21468908430f7fd309ba-277x180.jpg 277w" type="image/webp" media="(min-width: 1024px)" sizes="(min-width: 1024px) 277px, 100vw"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/ce7895db0c8d611da00b21468908430f7fd309ba-277x180.jpg 277w" type="image/jpeg" media="(min-width: 1024px)" sizes="(min-width: 1024px) 277px, 100vw"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/ce7895db0c8d611da00b21468908430f7fd309ba-277x180.jpg 342w" type="image/webp" media="(min-width: 600px) and (max-width: 1023px)" sizes="(min-width: 600px) 342px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/ce7895db0c8d611da00b21468908430f7fd309ba-277x180.jpg 342w" type="image/jpeg" media="(min-width: 600px) and (max-width: 1023px)" sizes="(min-width: 600px) 342px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/ce7895db0c8d611da00b21468908430f7fd309ba-277x180.jpg 570w" type="image/webp" media="(max-width: 599px)" sizes="(max-width: 599px) 570px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/ce7895db0c8d611da00b21468908430f7fd309ba-277x180.jpg 570w" type="image/jpeg" media="(max-width: 599px)" sizes="(max-width: 599px) 570px"><img src="https://cdn.sanity.io/images/s3y3vcno/production/ce7895db0c8d611da00b21468908430f7fd309ba-277x180.jpg" alt="CoinDesk Indices" width="277" height="180" loading="lazy"></picture></div>
                            <div class="pt-4 pb-4 lg:pb-8 mx-auto [&amp;_a]:text-link-dark-green [&amp;_a]:font-bold md:w-[65%] lg:w-[70%]">
                            <div class="document-body  font-body-lg">
                            <p>Since 2014, CoinDesk Indices has been at the forefront of the digital asset revolution. Our indices form the foundation of the worlds largest digital asset products. Known for their precision and compliance, flagships such as the CoinDesk Bitcoin Price Index (XBX) and the CoinDesk 20 Index set the industry standard for measuring, trading, and investing in digital assets.</p>
                            </div>
                            </div>
                            <div class="sm:block xs:hidden mdmax:w-full mdmax:mb-5 mdmax:shrink-0 md:w-[35%] lg:w-[30%] text-center sm:ml-7 sm:mr-0 mb-0"><picture class="about-picture1"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/ce7895db0c8d611da00b21468908430f7fd309ba-277x180.jpg 277w" type="image/webp" media="(min-width: 1024px)" sizes="(min-width: 1024px) 277px, 100vw"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/ce7895db0c8d611da00b21468908430f7fd309ba-277x180.jpg 277w" type="image/jpeg" media="(min-width: 1024px)" sizes="(min-width: 1024px) 277px, 100vw"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/ce7895db0c8d611da00b21468908430f7fd309ba-277x180.jpg 342w" type="image/webp" media="(min-width: 600px) and (max-width: 1023px)" sizes="(min-width: 600px) 342px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/ce7895db0c8d611da00b21468908430f7fd309ba-277x180.jpg 342w" type="image/jpeg" media="(min-width: 600px) and (max-width: 1023px)" sizes="(min-width: 600px) 342px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/ce7895db0c8d611da00b21468908430f7fd309ba-277x180.jpg 570w" type="image/webp" media="(max-width: 599px)" sizes="(max-width: 599px) 570px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/ce7895db0c8d611da00b21468908430f7fd309ba-277x180.jpg 570w" type="image/jpeg" media="(max-width: 599px)" sizes="(max-width: 599px) 570px"><img src="https://cdn.sanity.io/images/s3y3vcno/production/ce7895db0c8d611da00b21468908430f7fd309ba-277x180.jpg" alt="CoinDesk Indices" width="277" height="180" loading="lazy"></picture></div>
                            </div>
                            <hr class="about-hr mb-14">
                            <div class="flex mdmax:flex-col md:flex-row md:items-center md:pb-14 mdmax:pb-10">
                            <div class="sm:block xs:block mdmax:w-full mdmax:mb-5 mdmax:shrink-0 md:w-[35%] lg:w-[30%] text-center sm:mr-7 sm:ml-0 mb-0"><picture class="about-picture1"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3bed0dd6fdb261ad3817dfa41fce425cb447aca7-277x180.jpg 277w" type="image/webp" media="(min-width: 1024px)" sizes="(min-width: 1024px) 277px, 100vw"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3bed0dd6fdb261ad3817dfa41fce425cb447aca7-277x180.jpg 277w" type="image/jpeg" media="(min-width: 1024px)" sizes="(min-width: 1024px) 277px, 100vw"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3bed0dd6fdb261ad3817dfa41fce425cb447aca7-277x180.jpg 342w" type="image/webp" media="(min-width: 600px) and (max-width: 1023px)" sizes="(min-width: 600px) 342px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3bed0dd6fdb261ad3817dfa41fce425cb447aca7-277x180.jpg 342w" type="image/jpeg" media="(min-width: 600px) and (max-width: 1023px)" sizes="(min-width: 600px) 342px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3bed0dd6fdb261ad3817dfa41fce425cb447aca7-277x180.jpg 570w" type="image/webp" media="(max-width: 599px)" sizes="(max-width: 599px) 570px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3bed0dd6fdb261ad3817dfa41fce425cb447aca7-277x180.jpg 570w" type="image/jpeg" media="(max-width: 599px)" sizes="(max-width: 599px) 570px"><img src="https://cdn.sanity.io/images/s3y3vcno/production/3bed0dd6fdb261ad3817dfa41fce425cb447aca7-277x180.jpg" alt="CoinDesk industry events" width="277" height="180" loading="lazy"></picture></div>
                            <div class="pt-4 pb-4 lg:pb-8 mx-auto [&amp;_a]:text-link-dark-green [&amp;_a]:font-bold md:w-[65%] lg:w-[70%]">
                            <div class="document-body  font-body-lg">
                            <p>CoinDesk hosts myriad industry <a href="https://events.coindesk.com/">events</a> and <a href="https://events.coindesk.com/">webinars</a> each year, including Consensus, the world&rsquo;s largest, longest-running and most influential gathering that brings together all sides of the cryptocurrency, blockchain and Web3 community.</p>
                            </div>
                            </div>
                            <div class="sm:hidden xs:hidden mdmax:w-full mdmax:mb-5 mdmax:shrink-0 md:w-[35%] lg:w-[30%] text-center sm:ml-7 sm:mr-0 mb-0"><picture class="about-picture1"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3bed0dd6fdb261ad3817dfa41fce425cb447aca7-277x180.jpg 277w" type="image/webp" media="(min-width: 1024px)" sizes="(min-width: 1024px) 277px, 100vw"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3bed0dd6fdb261ad3817dfa41fce425cb447aca7-277x180.jpg 277w" type="image/jpeg" media="(min-width: 1024px)" sizes="(min-width: 1024px) 277px, 100vw"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3bed0dd6fdb261ad3817dfa41fce425cb447aca7-277x180.jpg 342w" type="image/webp" media="(min-width: 600px) and (max-width: 1023px)" sizes="(min-width: 600px) 342px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3bed0dd6fdb261ad3817dfa41fce425cb447aca7-277x180.jpg 342w" type="image/jpeg" media="(min-width: 600px) and (max-width: 1023px)" sizes="(min-width: 600px) 342px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3bed0dd6fdb261ad3817dfa41fce425cb447aca7-277x180.jpg 570w" type="image/webp" media="(max-width: 599px)" sizes="(max-width: 599px) 570px"><source srcset="https://cdn.sanity.io/images/s3y3vcno/production/3bed0dd6fdb261ad3817dfa41fce425cb447aca7-277x180.jpg 570w" type="image/jpeg" media="(max-width: 599px)" sizes="(max-width: 599px) 570px"><img src="https://cdn.sanity.io/images/s3y3vcno/production/3bed0dd6fdb261ad3817dfa41fce425cb447aca7-277x180.jpg" alt="CoinDesk industry events" width="277" height="180" loading="lazy"></picture></div>
                            </div>
                            <hr class="about-hr mb-14"></section>
                            </div>
                            <div class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
                            <section class="pt-4 lg:pt-16 pb-4 lg:pb-8 mdmax:w-full md:w-[680px] lg:w-[1032px] mx-auto flex flex-col">
                            <div class="flex mdmax:flex-col md:flex-row">
                            <h2 class="flex mdmax:w-full md:basis-1/2 md:max-w-[50%] mb-12 mdmax:leading-10 md:leading-[60px] font-headline-lg mdmax:tracking-normal md:tracking-[0.15px] px-3">By the numbers</h2>
                            <div class="flex mdmax:w-full md:basis-1/2 md:max-w-[50%]">
                            <div class="flex flex-wrap">
                            <div class="flex mdmax:w-full md:basis-1/2 md:max-w-[50%] mb-3 px-3">
                            <div class="relative mb-3 flex items-end"><span class="font-sans text-[4rem] leading-4 font-bold tracking-[-1px] mr-1 mb-4">3</span><span class="font-sans text-5xl leading-4 font-bold tracking-[-0.5px] mr-1 block" style="font-variant: small-caps; position: relative; top: -0.6em;">m</span></div>
                            <div class="mb-3">
                            <p class="font-sans text-xl font-bold leading-7 tracking-[0.15px]">Followers<!-- --> @CoinDesk Twitter</p>
                            </div>
                            <div>&nbsp;</div>
                            </div>
                            <div class="flex mdmax:w-full md:basis-1/2 md:max-w-[50%] mb-3 px-3">
                            <div class="relative mb-3 flex items-end"><span class="font-sans text-[4rem] leading-4 font-bold tracking-[-1px] mr-1 mb-4">5.7</span><span class="font-sans text-5xl leading-4 font-bold tracking-[-0.5px] mr-1 block" style="font-variant: small-caps; position: relative; top: -0.6em;">m</span></div>
                            <div class="mb-3">
                            <p class="font-sans text-xl font-bold leading-7 tracking-[0.15px]">CoinDesk Average Monthly Viewers</p>
                            </div>
                            <div>&nbsp;</div>
                            </div>
                            <div class="flex mdmax:w-full md:basis-1/2 md:max-w-[50%] mb-3 px-3">
                            <div class="relative mb-3 flex items-end"><span class="font-sans text-[4rem] leading-4 font-bold tracking-[-1px] mr-1 mb-4">11</span><span class="font-sans text-5xl leading-4 font-bold tracking-[-0.5px] mr-1 block" style="font-variant: small-caps; position: relative; top: -0.6em;">k+</span></div>
                            <div class="mb-3">
                            <p class="font-sans text-xl font-bold leading-7 tracking-[0.15px]">Consensus Event Attendees</p>
                            </div>
                            <div><span class="block font-sans text-xs font-normal tracking-[0.4px]">Consensus has been recognized as the most influential event in cryptocurrency and blockchain.</span></div>
                            </div>
                            <div class="flex mdmax:w-full md:basis-1/2 md:max-w-[50%] mb-3 px-3">
                            <div class="relative mb-3 flex items-end"><span class="font-sans text-[4rem] leading-4 font-bold tracking-[-1px] mr-1 mb-4">50</span><span class="font-sans text-5xl leading-4 font-bold tracking-[-0.5px] mr-1 block" style="font-variant: small-caps; position: relative; top: -0.5em;">+</span></div>
                            <div class="mb-3">
                            <p class="font-sans text-xl font-bold leading-7 tracking-[0.15px]">Largest Group of Crypto Journalists In The World</p>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </section>
                            </div>
                            </section>',
            'sitemap'=> '',
            'ethics'=> '<section class="flex-grow" data-module-name="page" data-module-version="1.0.0" data-module-instance="default">
                            <div class="container">
                            <div class="w-full flex flex-col gap-8 md:max-w-[680px] m-auto">
                            <h1 class="text-color-black font-headline-lg font-medium">100xinsider Ethics Policy</h1>
                            <h2 class="text-color-black font-headline-sm font-medium text-[#676767]">100xinsider is the leading news publication covering the digital transformation of money in the 21st century. Our mission is to inform, educate and connect the global community of investors, innovators and users of cryptocurrencies, blockchains and other decentralized technologies. That includes everyone from sophisticated professionals to curious newcomers. Founded in 2013, we serve an audience of 5 million monthly website visitors, 15,000+ annual conference attendees, and 370,000+ newsletter subscribers.</h2>
                            <div class="document-body  font-body-lg">
                            <p><em>Last updated December 2024</em></p>
                            <p><strong>Editorial independence:</strong> In November 2023, CoinDesk was <a href="https://bullish.com/news-insights/news/bullish-acquires-coindesk-from-digital-currency-group/" target="_blank" rel="noopener">acquired</a> by Bullish, which <a href="https://www.sec.gov/Archives/edgar/data/1872195/000119312521363646/d180840df4a.htm#toc180840_30" target="_blank" rel="noopener">also owns</a> an eponymous cryptocurrency exchange. Bullishs chairman is Brendan Blumer, who is also the CEO and co-founder of <a href="http://block.one/" target="_blank" rel="noopener">Block.one</a>; both of his companies have interests in a variety of blockchain and crypto businesses and significant holdings of digital assets including bitcoin. (<a href="http://block.one/" target="_blank" rel="noopener">Block.one</a>s portfolio companies are listed <a href="https://b1.com/portfolio/" target="_blank" rel="noopener"><span style="text-decoration: underline;">here</span></a>.)</p>
                            <p>CoinDesks news team operates independently with an editorial committee to ensure journalistic independence.</p>
                            <p>Neither Bullish nor any of its executives has any involvement in editorial or content decisions, and our journalists cover the parent company and its affiliates and investments without fear or favor.</p>
                            <p><strong>Disclosure:</strong> In the interest of transparency, all CoinDesk articles automatically include at the bottom a disclosure of our corporate ownership.</p>
                            <p>Further, any article mentioning Bullish, <a href="http://block.one/" target="_blank" rel="noopener">Block.one</a> or Blumer will include a prominent disclosure in the body text that CoinDesk is owned by Bullish.</p>
                            <p>Bullish has not disclosed its roster of investors since 2021, and CoinDesk journalists are unaware if the publicly available <a href="https://bullish.com/news-insights/news/launch-of-new-cryptocurrency-exchange-bullish/" target="_blank" rel="noopener"><span style="text-decoration: underline;">list</span></a> is up-to-date.</p>
                            <p>CoinDesk employees, including journalists, may receive options in Bullish (the parent company, not the exchange) as part of their compensation.</p>
                            <p><strong>Journalistic standards:</strong> We strive for the utmost accuracy, fairness, objectivity and responsible reporting, whether surfacing original news or in reviewing and corroborating information from other sources.</p>
                            <p>Our journalists know their reporting can affect individual and company reputations, and that they must always be patient and persistent in seeking comment from their subjects. There are usually at least two sides to any story, and CoinDesk will always be diligent in seeking a diverse range of intelligent, sober perspectives.</p>
                            <p>All factual errors in published articles will be corrected promptly upon discovery, and all corrections and amendments to an article will be disclosed in a note at the bottom. In rare cases where the central idea of an article warrants a correction, the disclosure will be placed at the top and shared on social media, so the correction is broadcast as widely as the original error.</p>
                            <p>Editors and reporters may never accept payment from any company or individual for coverage or preferential treatment. Journalists are not allowed to accept gifts from companies or individuals CoinDesk covers or is likely to cover. (Exceptions may be made for items of nominal value, such as a T-shirt, hat or coffee mug, or food or beverages that can be consumed within 24 hours.)</p>
                            <p>Opinion articles, whether written by outside contributors or staff members, are always clearly labeled as such.</p>
                            <p>As with all reliable media outlets, we do not reveal the identities of sources who speak to us on condition of anonymity for fear of retaliation from the powerful. However, we are also careful about relying on anonymous sources. All stories that originate with an anonymous source require corroboration from at least one other source with firsthand knowledge of the information, and often more, depending on the sensitivity of the story.</p>
                            <p>Further, we respect the pseudonymity of credible sources who have established reputations in the crypto community under their online handles. We believe prolific software developers and other influential figures who do not give their legal names have reputational skin in the game when they attach their words to their well-known pseudonyms. In many cases, that attachment is sufficient to expect a sufficient degree of accountability. As such, we will not reveal anyone&rsquo;s identity without his or her consent, unless there is an overwhelming public interest in doing so.</p>
                            <p><strong>Personal investing:</strong> CoinDesk reporters must disclose in their profile pages any cryptocurrency holdings of $1,000 or more; update these disclosures upon any material changes; and, in their articles, mention any potential conflicts of interest. They should avoid such conflicts by minimizing their own coverage of assets or companies in which they have a financial interest. Above all, they may never misuse our platform for personal gain.</p>
                            <p>Further, trading is forbidden during working hours. Employees are not permitted to short crypto assets or trade futures contracts. Any cryptocurrencies (or stocks) purchased by a CoinDesk journalist must be held for a minimum 30 days.</p>
                            <p><strong>Company stocks:</strong> Our policy on owning stocks is more restrictive than for cryptocurrency, for several reasons.</p>
                            <p>First, using cryptocurrency and related services is often an important part of researching and understanding the field, while setting up and using a brokerage account is not traditionally involved when reporting on publicly traded companies.</p>
                            <p>Second, companies have management teams, run from the top down, who have direct control over the direction of the project and can try to influence reporters for favorable coverage. While crypto projects have developer teams and other interested parties, there is no one nominally &ldquo;in charge&rdquo; with outsize sway over how the project operates. The absence of direct control means there is not the same degree of conflict as with stocks &ndash; not enough to outweigh the educational value of reporters using crypto, and little enough to be mitigated by our disclosure rules outlined above.</p>
                            <p>Third, a reporter breaking a story, positive or negative, about a publicly traded company sometimes has access to material nonpublic information that, once published, could move the stock price; reporters covering a cryptocurrency are usually working with information in the public domain (on the blockchain, in code repositories or in developer forums). While there are exceptions where non-public information derived from a company involved in the crypto field could move the price of a token, any potential conflict associated with such instances would be mitigated by the disclosure requirements.</p>
                            <p>All CoinDesk editors and reporters are barred from owning shares in pure-play crypto firms (e.g. Coinbase). Further, beat reporters and their editors who regularly cover diversified companies involved in crypto (e.g. Block, Tesla, MicroStrategy) are not allowed to own shares in those firms.</p>
                            <p>CoinDesk employees who are found to be not in compliance with these rules may be subject to penalties up to and including termination.</p>
                            <p><strong>Social media:</strong> CoinDesk&rsquo;s mission is to drive the conversation around the future of money, and social media is one of the best tools to do that. Our official brand accounts are the authoritative editorial voice of CoinDesk. We use social media to share our content and to make announcements about events and new products.</p>
                            <p>Journalists are encouraged to interact with users of our content through their personal handles. In doing so, they are representing CoinDesk&rsquo;s brand and values. While they may use their own distinctive voice or express personal opinions, they are expected to conduct themselves professionally. They may not make personal attacks or spread unverified information that could damage an individual&rsquo;s or company&rsquo;s reputation.</p>
                            <p><strong>Use of AI:</strong> CoinDesk may occasionally use artificial intelligence (AI) tools to help generate content (text, images, etc.). Our policy is to carefully edit and fact-check such content and to be transparent about this practice to readers through a clear disclosure in the article as well as a dedicated byline that identifies the AI as a creator/contributor of the content. For more on CoinDesk&rsquo;s use of AI, <a href="https://www.coindesk.com/coindesk-news/2023/04/14/how-coindesk-will-use-generative-ai-tools/"><em>read this article</em></a>.</p>
                            <p><strong>Advertising:</strong> One of the ways CoinDesk generates revenue is through online advertising. Aside from maintaining basic standards of quality, CoinDesk does not allow advertising for tokens that are actively seeking investment. For tokens that are outside of a fund raise period, legal documentation must be provided stating that the advertisers token is regulated by the U.S. Securities and Exchange Commission (SEC) or the Commodities Futures Trading Commission (CFTC) in addition to adhering to the guidelines of the Investment Advisor Act of 1940.</p>
                            <p>CoinDesk articles sometimes include affiliate links, which may generate revenue when readers interact with them and the vendors they link to. When an affiliate link is present in an article, the page will include a written disclosure about the link and its purpose. The presence of affiliate links has no influence on editorial decisions, and members of our commercial team are explicitly forbidden from contacting writers and editors about business relationships.</p>
                            <p><strong>Events and partnerships:</strong> From time to time, CoinDesk may publish sponsored content on our platforms. This content will be explicitly labeled as sponsored, will never be written by CoinDesk journalists or editorial staffers, and will be clearly delineated from our news, analysis, research and opinion articles. Sponsored content relationships will have no impact on the journalism independently produced by CoinDesk&rsquo;s editorial team.</p>
                            <p>Likewise, CoinDesk events may include sponsored sessions. These sessions will be clearly billed as sponsored and wholly separate from the vast majority of sessions that are curated by the content team, Sponsor relationships will have no impact on speaking invitations or event programming.</p>
                            <p><strong>Giveaways/contests:</strong> CoinDesk journalists may not accept tokens, coins or any other products or merchandise from giveaways, contests, airdrops or other events that may affect their ability to impartially cover digital assets or the companies behind them.</p>
                            </div>
                            </div>
                            </div>
                            </section>',
            'terms'=> '<section class="flex-grow" data-module-name="page" data-module-version="1.0.0" data-module-instance="default">
                            <div class="container">
                            <div class="w-full flex flex-col gap-8 md:max-w-[680px] m-auto">
                            <h1 class="text-color-black font-headline-lg font-medium">Terms Of Use</h1>
                            <div class="document-body  font-body-lg"><small class="font-body-sm text-[#676767] leading-[1.3125rem]"><span style="text-decoration: underline;">Effective Date:</span> February 17, 2025.</small>
                            <p>Welcome to the CoinDesk website and related interactive features, articles, videos, products, services, online and mobile applications, or other downloads (collectively, the &ldquo;ServicesServices&rdquo;) that are owned by CoinDesk, Inc. and/or our affiliates and subsidiaries, including CoinDesk Indices, Inc. and CC Data Limited (collectively, &ldquo;CoinDesk&rdquo;, the &ldquo;Company,&rdquo; &ldquo;we&rdquo; or &ldquo;us&rdquo;). <strong>BY USING OUR SERVICES, YOU ARE ACCEPTING THE PRACTICES DESCRIBED IN THESE TERMS OF USE (&ldquo;TERMS&rdquo;) AND OUR</strong>&nbsp;<strong><a href="https://www.coindesk.com/privacy/">PRIVACY POLICY</a>. IF YOU DO NOT AGREE TO THESE TERMS, YOU MAY NOT USE THESE SERVICES. WE RESERVE THE RIGHT TO MODIFY OR AMEND THESE TERMS FROM TIME TO TIME WITHOUT NOTICE. YOUR CONTINUED USE OF OUR SERVICES FOLLOWING THE POSTING OF CHANGES TO THESE TERMS WILL MEAN YOU ACCEPT THOSE CHANGES.</strong></p>
                            <p><strong>EXCEPT FOR CERTAIN TYPES OF DISPUTES DESCRIBED IN THE &lsquo;AGREEMENT TO ARBITRATE&rsquo; SECTION BELOW, YOU AGREE THAT ALL DISPUTES BETWEEN YOU AND US WILL BE RESOLVED BY BINDING, INDIVIDUAL ARBITRATION, AND YOU WAIVE YOUR RIGHT TO PARTICIPATE IN A CLASS ACTION LAWSUIT OR CLASS-WIDE ARBITRATION.</strong></p>
                            <p><strong>Agreement to Arbitrate.</strong> The parties acknowledge that any statutory or common law claims related to intellectual property may require forms of equitable relief that are best administered by courts; accordingly, the parties agree that except for statutory or common law claims related to intellectual property and disputes that qualify for small claims court, any controversy or claim arising out of or relating to these Terms or any aspect of the relationship between us, whether based in contract, tort, statute, fraud, misrepresentation or any other legal theory, will be resolved by arbitration administered by the American Arbitration Association (AAA) in accordance with its &ldquo;Commercial Arbitration Rules and the Supplementary Procedures for Consumer Related Disputes.&rdquo; Judgment on the award rendered by the arbitrator may be entered in any federal or state court of competent jurisdiction located in the County of New York in the State of New York. For more information about arbitration, the AAA, and the arbitration process, please consult the American Arbitration Association web site at <a href="https://www.adr.org/" target="_blank" rel="noopener">www.adr.org</a>. You agree that by agreeing to these Terms, you and we are each waiving the right to trial by jury, except as otherwise stated above. All issues are for the arbitrator to decide, except those issues relating to the interpretation of the scope, application, and enforceability of this arbitration provision are for a court to decide. As stated in <em>General</em> section below, New York law applies to any arbitration under these Terms, but the parties acknowledge that the Federal Arbitration Act governs the interpretation and enforcement of this provision. This agreement to arbitrate shall survive termination of these Terms. This arbitration agreement does not preclude you from bringing issues to the attention of federal, state, or local agencies, and, if the law allows, they can seek relief against us for you.</p>
                            <p>Unless you and we agree otherwise, the arbitration will take place in the County of New York in the State of New York. For claims of $14,000 or less, you can choose whether you would like arbitration carried out based only on documents submitted to the arbitrator, or by a hearing in person, by phone, or via online video conference.</p>
                            <p>The arbitrator may award money or equitable relief in favor of only the individual party seeking relief and only to the extent necessary to provide relief warranted by that partys individual claim. To reduce the time and expense of the arbitration, the arbitrator will not provide a statement of reasons for their award unless requested to do so by both parties. Unless both you and we agree otherwise, the arbitrator may not consolidate more than one persons claims and may not otherwise preside over any form of a representative or class proceeding.</p>
                            <p><strong>Waiver of Class Actions.</strong> YOU AND COMPANY AGREE THAT EACH PARTY MAY BRING DISPUTES AGAINST THE OTHER PARTY ONLY IN AN INDIVIDUAL CAPACITY, AND NOT AS A PLAINTIFF OR CLASS MEMBER IN ANY PURPORTED CLASS OR REPRESENTATIVE PROCEEDING, INCLUDING, WITHOUT LIMITATION, A FEDERAL OR STATE CLASS ACTION LAWSUIT.</p>
                            <p><strong>Non-United States Residents</strong></p>
                            <p>CoinDesk operates this site in the United States. We make no representation that the Services, including merchandise offered for sale on this site and their copyrights, trademarks, patents, and licensing arrangements, are appropriate or available for use in locations other than the United States. If you access this site from locations outside of the United States you do so on your own initiative and at your own risk, and you are solely responsible for compliance with local laws, if and to the extent local laws are applicable.</p>
                            <p><strong>Order Eligibility.</strong> Unless otherwise stated at the time of purchase, you may only purchase products and services for personal, non-commercial use. We may refuse any order that we have reason to believe is for onward sale other than through distribution channels approved by Company. We make no representation or guarantees that products or services available on the Services are appropriate or available for use in locations outside the United States. Accessing the Services from territories where its contents are illegal or unlawful is prohibited. It is your responsibility to ascertain and obey all applicable local, state, federal and international laws (including minimum age requirements) regarding the possession, use and sale of any product or service purchased from these Services. Nothing on the Services constitutes a binding offer to sell, distribute, or give away any products or services. In the event the products and services are listed at an incorrect price, we have the right to refuse or cancel orders placed at the incorrect price, regardless of whether the order has been confirmed or you have been charged. We reserve the right at any time after receipt of your order to accept or decline such order, or any portion thereof, or to not ship to particular addresses, even after your receipt of an order confirmation or after you have been charged.</p>
                            <p><strong>Products and Services.</strong> Details of the products and services available for purchase are set out on the Services. All prices are displayed and charged in US dollars. Applicable sales and other taxes may not be included and are in addition to the sale price. All online transaction totals reflect the estimated tax amount; the actual tax amount will be calculated based on your shipping location and many vary from the estimated tax. Discounts and sales prices may not be applied to previous orders. We reserve the right to shorten the duration of any special order or sales promotion. All features, content, specifications, products and prices of products and services described or depicted on these Services are subject to change at any time without notice. The inclusion of any products or services on these Services at a particular time does not imply or warrant that these products or services will be available at any time. Occasionally, the availability of a certain product or service may be delayed. Any terms and conditions of any offer disclosed to you when ordering is deemed part of these Terms.</p>
                            <p><strong>DESK Program:</strong> DESK is a social token that is designed solely for use and engagement between you and us and, as such, may only be earned on and used in connection with our Websites and events. DESK does not have any independent or monetary value, it is not a store of value or investment, it does not constitute your property, and it does not entitle you to any vested right or interest. While we offer you the ability to trade your DESK for certain products, services, or other items, DESK is not redeemable or exchangeable for any other forms of value and we are under no obligation to provide you anything in exchange for DESK you have been rewarded by us. Rewarded DESK are personal to you and may not be sold, transferred, or assigned to, or shared with, family, friends, or others by you or used for any commercial purposes. Without notice to you, we reserve the right to suspend or terminate your account and void any DESK associated with your account or associated with any wallet used by multiple accounts, if you attempt to list, offer/acquire, or exchange DESK, or otherwise violate these Terms. If your account is terminated, any DESK associated with your account will be voided. We reserve the right, at any time and without notice, to change or suspend when, how, and how much DESK is provided in our sole discretion. We reserve the right to change, modify, discontinue, or cancel this reward program at any time and in our sole discretion and without notice to you. If this program is discontinued or canceled, all rewarded DESK will be forfeited without compensation.</p>
                            <p><strong>NFTs; Consensus NFT Ticket:</strong> Any NFTs purchased or received from us or one of our approved marketplaces are subject to the following terms. You agree that we, or our licensee (including the original artist), own all legal rights, titles, and interests in and to the artwork and any other intellectual property rights contained within the NFT. Except for the limited license granted to you in the next sentence, we and our licensees reserve all rights, titles, and interests in the artwork and any other intellectual property rights contained therein. Subject to your continued compliance with these Terms and any other applicable terms and conditions, we hereby grant you a worldwide, revocable, non-exclusive, personal and non-commercial license to (a) display the artwork associated with the NFT in its original form, (b) display the NFT on a third-party site for non-commercial purposes, so long as the site cryptographically verifies each NFT owner&rsquo;s right to display the artwork to ensure that only the actual owner can display the artwork and that the artwork is no longer visible once the NFT owner leaves the site, and (c) to transfer said NFT, provided that said transfer and any future transfers remain subject to these Terms, and if transferred via a marketplace, so long as that marketplace cryptographically verifies each NFT owner&rsquo;s right to display the artwork to ensure that only the actual owners can display the artwork.</p>
                            <p>In relation to our Consensus NFT Ticket program, each purchase is also subject to the terms and conditions associated with each applicable event and award. Not all available rewards are assigned to each token, the rewards are subject to change, and additional requirements may apply in order to redeem a reward. To receive the full value of this program you must also enroll with our verification provider, currently Tokenproof. Failure to maintain a current email address in our records or to respond within the proscribed time periods may result in the lapse of the ticket and/or award, no credit or refund will be provided. Quantities are limited and awards are subject to expiration.</p>
                            <p>Any additional licenses or other terms and conditions provided by us at the time of your acquisition of a NFT from us will supplement and will become a part of this section. In the event of a conflict between this section and the supplemental terms, these terms will continue to govern unless the supplemental terms specifically reference this section in the Terms and expressly indicate that they override part or all of this Section.</p>
                            <p><strong>Conferences and Events:</strong> Additional terms and conditions apply to attendance of conferences and events. Those additional terms will be available at the time of registration or in the event forum.</p>
                            <p><strong>Electronic Receipts and Notices.</strong> By using our Services or making a purchase you consent to receive notices, disclosures, agreements, policies, receipts, confirmations, transaction information, account information, other communications, and changes or updates to any such documents electronically. We will provide these by posting them on your account page or emailing them to the email address associated with your account or order. You agree that these electronic documents satisfy legal communication requirements, including but not limited to requirements that any such communications be in writing.</p>
                            <p><strong>Shipping Limitations.</strong> The order will be shipped to an address designated by the purchaser if that shipping address is compliant with the shipping restrictions contained on these Services. Risk of loss and title for items purchased from these Services pass to you upon delivery of the items to the carrier. You are responsible for filing any claims with carriers for damaged or lost shipments. Signature may be required for delivers. Company does not guarantee any particular delivery date and is not responsible for any delays.</p>
                            <p><strong>Returns and Refunds.</strong> Unless otherwise stated by us at the time of purchase, all sales are final and no refunds or credit will be issued. If we do allow a return or issue a refund or credit, we are under no obligation to issue the same or similar in the future. Certain jurisdictions may provide additional statutory rights. Nothing herein is meant to limit your return or cancellation rights under applicable local law.</p>
                            <p><strong>Charges.</strong> For all charges for any products or services sold on the Services, Company will bill your credit card or alternative payment method offered by Company. You agree to provide valid and updated payment information. In the event legal action is necessary to collect on balances due, you agree to reimburse Company for all expenses incurred to recover sums due, including attorneys&rsquo; fees and other legal expenses. You are responsible for purchase of, and payment of charges for, all Internet access services needed for use of these Services and all fees charged to you by your financial institution related to the charges. Payment obligations are non-cancelable, and fees paid are non-refundable. Company may suspend or terminate your account, in addition to other rights and remedies, if any amount is past due. You shall provide Company with written notice of any disputed charges within ten (10) business days of the date of the charge. Notice of the dispute must provide in reasonable detail a statement of the basis for disputing the charge.</p>
                            <p><strong>Promotional Codes.</strong> On occasion Company may issue promotion codes that may be redeemed at the time of check out. These codes are non-transferable and may only be used by the intended recipient; these codes have no cash value and are not redeemable for cash. We reserve the right to cancel any promotion code and limit redemption when the total value of the promotional code exceeds the price of the item. Multiple promotional codes may not be combined. When a promotion or promotional code has been communicated to a particular individual, the promotional code is non-transferable, and the name and email address provided during the checkout must be the same. We are not responsible for any financial loss arising out of our refusal, cancelation or withdrawal of a promotion or any failure or inability of a customer to use a promotional code for any reason.</p>
                            <p><strong>Contest and Promotions.</strong> From time to time, we, our advertisers, or other parties may conduct promotions and other activities on, through or in connection with the Services, including, without limitation, contests, and sweepstakes. In some case, you may be able to win a prize. Each promotion may have additional terms, rules, or eligibility requirements which will be posted or otherwise made available to you in connection therewith in accordance with applicable law.</p>
                            <p><strong>Copyright, Trademark and Ownership.</strong> All the content displayed on the Services, including without limitation all text, graphics, photographs, data, graphs, images, moving images, sound, and illustrations ("Content"), is owned by Company, its licensors, agents, or the party credited as the provider of the Content. All elements of the Services, including, without limitation, the Services&rsquo; general design, Company&rsquo;s trademarks, service marks, trade names (including the Company&rsquo;s name, logos, the Services&rsquo; names, and the Services&rsquo; design), and other Content, are protected by trade dress, copyright, moral rights, trademark, and other laws relating to intellectual property rights (&ldquo;Intellectual Property Rights&rdquo;). All present and future Intellectual Property Rights shall, as between you and CoinDesk, at all times be and remain the sole and exclusive property of CoinDesk. All present and future rights in and title to the Services (including the right to exploit the Services and any portions of the Services over any present or future technology) are reserved to CoinDesk for its exclusive use. Except as may be otherwise indicated on the Services, you are only authorized to view, play, print and download documents, audio and video found on our Services for personal, informational, and non-commercial purposes only. You may not use, copy, reproduce, republish, upload, post, transmit, distribute, or modify the Content or the Company&rsquo;s trademarks in any way, including in advertising or publicity pertaining to distribution of materials on the Services, without Companys prior written consent. The use of Company trademarks on any other websites is not allowed. The Company prohibits the use of our trademarks as a &ldquo;hot&rdquo; link on or to any other websites unless establishment of such a link is approved in writing in advance by the Company. You will not remove any copyright, trademark or other proprietary notices from material found on the Services. You agree to notify the Company in writing promptly upon becoming aware of any unauthorized access or use of the Services by any individual or entity or of any claim that the Services infringe upon any copyright, trademark, or other contractual, statutory, or common law rights.</p>
                            <p><strong>User Content.</strong> In designated areas, Company may allow users or members of the public to submit user published content or user content (e.g., comments to articles, participation in communities, etc.) to Company for consideration in connection with the Services (&ldquo;User Content&rdquo;). User Content remains the intellectual property of the individual user. By posting content on our Services, you expressly grant Company a non-exclusive, perpetual, irrevocable, royalty-free, fully paid-up worldwide, fully sub-licensable right to use, reproduce, modify, adapt, publish, translate, create derivative works from, distribute, transmit, perform and display such content and your name, voice, and likeness as contained in your User Content, in whole or in part, and in any form throughout the world in any media or technology, whether now known or hereafter discovered, including all promotion, advertising, marketing, online and offline use, merchandising, publicity and any other ancillary uses thereof, and including the unfettered right to sublicense such rights, in perpetuity throughout the universe. All User Content is deemed non-confidential, and Company shall be under no obligation to maintain the confidentiality of any information, in whatever form, contained in any User Content. You agree that we may modify or alter your User Content without seeking further permission from you. To submit a request to have content that you have posted removed, please contact the designated community manager.</p>
                            <p>User Content does not represent the views of Company, or any individual associated with Company, and we do not control the User Content. In no event shall you represent or suggest, directly or indirectly, Company&rsquo;s endorsement of User Content. Company does not vouch for the accuracy or credibility of any User Content on our Services and does not take any responsibility or assume any liability for any actions you may take because of reading User Content on our Services. Through your use of the Services, you may be exposed to content that you may find offensive, objectionable, harmful, inaccurate, or deceptive. There may also be risks of dealing with underage persons or people acting under false pretense. By using our Services, you assume all associated risks.</p>
                            <p>Company does not encourage and strongly discourages any User Content that results from any activity that: (a) may create a risk of harm, loss, injury, emotional distress, death, disability, disfigurement, or illness to you, to any other person, or to any animal; (b) may create a risk of any loss or damage to any person or property; or (c) may constitute a crime or create civil liability. You agree that you have not and will not engage in any of the foregoing activities in connection with producing your submission. Without limiting the foregoing, you agree that in conjunction with your submission, you will not inflict emotional distress on other people, will not humiliate other people (publicly or otherwise), will not assault or threaten other people, will not enter onto private property without permission, and will not otherwise engage in any activity that may result in injury, death, property damage, or liability of any kind. Company may reject or remove any submissions that Company believes, in its sole discretion, include any inappropriate or prohibited material.</p>
                            <p><strong>Sponsor Content; Ethics.</strong> Please see the <a href="ethics">CoinDesk Ethics Policy</a> for details on our rules regarding sponsored content, social media, use of AI, and other editorial policies.</p>
                            <p><strong>Digital Millennium Copyright Act (&ldquo;DMCA&rdquo;) Notice.</strong> Third party materials that we do not own or control may be transmitted, stored, accessed, or otherwise made available using the Services. Company has adopted a policy that provides for the removal of any content or the suspension of any user that is found to have repeatedly infringed on the copyright of a third party. If you believe any material available via the Services infringes a copyright, you should notify us using the notice procedure for claimed infringement under the DMCA (17 USC Section 512). Your infringement notice should be sent to <a href="mailto:copyrightagent@coindesk.com?subject=DMCA%20Complaint" target="_blank" rel="noopener">copyrightagent@coindesk.com</a>. Please make you sure that you specifically identify the copyrighted work that you claim has been infringed by providing specific URL(s) and a precise description of where the copyrighted material is located on the page(s).</p>
                            <p>We may give notice to our users of any infringement notice by means of a general notice on any of our Services, electronic mail to a users e-mail address in our records, or by written communication sent to a users last known physical address in our records. If you receive such an infringement notice, you may provide counter-notification in writing. Please be advised that if you submit a counter-notification, that notice along with your identifying information included in the notice will be provided to the party that submitted the original claim of infringement.</p>
                            <p><strong>Advertising Rights.</strong> Company reserves the right to sell and display any advertising, attribution, links, promotional and distribution rights, and Company and its licensors or affiliates will be entitled to retain all revenue generated from any sales of such advertising, attribution, links, or promotional or distribution rights. Nothing in these additional terms obligates or may be deemed to obligate Company to sell or offer to sell any advertising, promotion, or distribution rights.</p>
                            <p><strong>Accuracy of Information.</strong> We attempt to ensure that information on these Services is complete, accurate and current. Despite our efforts, the information on these Services may occasionally be inaccurate, incomplete, or out of date. We make no representation as to the completeness, accuracy, or currency of any information on these Services. For example, products included on these Services may be unavailable, may have different attributes than those listed, or may carry a different price than that stated on these Services. In addition, we may make changes in information about price and availability without notice. We reserve the right, without prior notice, to limit the order quantity on any product or service or to refuse service to any customer. We also may require verification of information prior to the acceptance or shipment of any order.</p>
                            <p><strong>Links.</strong> Running or displaying these Services or any information or material displayed on these Services in frames or through similar means on another website without our prior written permission is prohibited. From time to time, these Services may contain links to third-party Services that are not owned, operated, or controlled by Company or its affiliates. All such links are provided solely as a convenience to you. If you use these links, you will leave our Services. We are not responsible for any content, materials or other information located on or accessible from any third-party Services. We do not endorse, guarantee, or make any representations or warranties regarding any other Services, or any content, materials or other information located or accessible from any other Services, or the results that you may obtain from using any other Services. If you decide to access any other Services linked to or from these Services, you do so entirely at your own risk.</p>
                            <p><strong>Inappropriate Use of the Services</strong>. You are prohibited from sending or posting any unlawful, threatening, defamatory, libelous, obscene, pornographic, or profane messages or materials on the Services. You may not post any material on the Services, or otherwise use the Services in any manner, that could: (a) humiliate, threaten, or injure other people or their property rights, including, but not limited to, intellectual property rights; (b) violate the privacy or publicity rights of other individuals or entities; (c) be considered criminal conduct or give rise to civil liability; or (d) otherwise violate any law or these Terms. You agree not to use, transfer, distribute, or dispose of any information contained in the Services in any manner that could compete with the business of the Company. You further understand and agree that posting unsolicited advertisements on these Services is expressly prohibited by these Terms. Any unauthorized use of our computer systems is a violation of these Terms. In addition to any remedies that we may have at law or in equity, if we determine, in our sole discretion, that you have violated or are likely to violate the foregoing prohibitions, we may take any action we deem necessary to prevent or cure the violation, including without limitation, the immediate removal of your content from these Services, termination of your account, and termination of your access to the Services. As set forth in our <a href="https://www.coindesk.com/privacy/">Privacy Policy</a>, we may fully cooperate with any law enforcement authorities or court order or subpoena requesting or directing us to disclose the identity of anyone posting such materials.</p>
                            <p>The Services are provided for general information purposes only and are not intended for trading or investment purposes or to address Your particular financial or other requirements. In particular, the Services: (i) do not constitute any form of advice (financial, investment, tax, legal or otherwise) and should not be relied on for any purposes; (ii) do not constitute any inducement, invitation or recommendation relating to any of the products or services listed or referred to therein; and (iii) are not intended to be relied upon by You in making (or deciding not to make) any specific investment or other decisions.</p>
                            <p>YOU SHOULD OBTAIN APPROPRIATE EXPERT INDEPENDENT FINANCIAL ADVICE BEFORE MAKING ANY INVESTMENT OR OTHER DECISIONS.</p>
                            <p><strong>Account Registration and Security.</strong> You understand that you may need to create an account to have access to parts of the Services. Accounts are limited to one per individual and multiple accounts may not share the same wallet. In consideration of your use of the Services, you will: (a) provide true, accurate, current, and complete information about yourself as prompted by the Services registration process and (b) maintain and promptly update your information to keep it true, accurate, current, and complete. If Company suspects that such information is untrue, inaccurate, not current, incomplete, or that you maintain multiple accounts, Company has the right to suspend or terminate your account and refuse all use of the Services. You are entirely responsible for the security and confidentiality of your password and account. Furthermore, you are entirely responsible for all activities that occur under your account. You agree to immediately notify us of any unauthorized use of your account or any other breach of security of which you become aware. You are responsible for taking precautions and providing security measures best suited for your situation and intended use of the Services. Please note that anyone able to provide your username and password will be able to access your account so you should take reasonable steps to protect this information.</p>
                            <p><strong>Access and Interference.</strong> You agree that you will not use any robot, spider, scraper, or other automated means to access the Services for any purpose without our express written permission. Additionally, you agree that you will not: (a) take any action that imposes or may impose in our sole discretion an unreasonable or disproportionately large load on our or our vendors systems; (b) interfere or attempt to interfere with the proper working of the site or any activities conducted on the Services; or (c) bypass any measures we may use to prevent or restrict access to the Services.</p>
                            <p><strong>Privacy.</strong> Information collection and use, including the collection and use of personal information, is governed by our <a href="https://www.coindesk.com/privacy/">Privacy Policy</a> which is incorporated into and is a part of these Terms.</p>
                            <p><strong>Force Majeure.</strong> Company is not responsible for damages, delays, or failures in performance resulting from acts or occurrences beyond its reasonable control, including, without limitation: fire, lightning, explosion, power surge or failure, water, acts of God, public health emergency, war, revolution, civil commotion or acts of civil or military authorities or public enemies: any law, order, regulation, ordinance, or requirement of any government or legal body or any representative of any such government or legal body; or labor unrest, including without limitation, strikes, slowdowns, picketing, or boycotts; inability to secure raw materials, transportation facilities, fuel or energy shortages, or acts or omissions of other common carriers.</p>
                            <p><strong>Representations and Warranties.</strong> You affirm, represent and warrant the following: (a) you are old enough in your location to enter into a binding contract with Company and have the right and authority to enter into this agreement, and are fully able and competent to satisfy the terms, conditions and obligations herein; (b) you have obtained all consents, and possess all copyright, patent, trademark, trade secret and any other proprietary rights, or the necessary licenses thereto, for any content you have provided to us; (c) if applicable, you have the written consent of each and every identifiable natural person to use such persons name or likeness in the manner contemplated by the Services and these Terms, and each such person has released you from any liability that may arise in relation to such use; (d) you have read, understood, agree with, and will abide by the terms and conditions of this agreement; (e) you are not, and have not been an agent of Company and were not and are not acting on behalf of, or as a representative of, Company or any other party; (f) Company use of any information you have submitted as contemplated by the Terms and the Services will not infringe any rights of any third party, including but not limited to any intellectual property rights, privacy rights and rights of publicity; (g) you are not located in a country that is subject to a government embargo or that has been designated as a &ldquo;terrorist supporting&rdquo; country; and (h) your User Content does not contain: (1) material falsehoods or misrepresentations that could harm Company or any third party; (2) content that is unlawful, obscene, defamatory, libelous, threatening, pornographic, harassing or encourages conduct that would be considered a criminal offense, give rise to civil liability or violate any law; (3) advertisements or solicitations of business; or (4) impersonations of third parties.</p>
                            <p><strong>DISCLAIMERS.</strong> YOUR USE OF THESE SERVICES IS AT YOUR OWN RISK. THE INFORMATION, MATERIALS, PRODUCTS AND SERVICES PROVIDED ON, THROUGH, OR IN CONNECTION WITH THE SERVICES OR OTHERWISE PROVIDED BY US ARE PROVIDED "AS IS" WITHOUT ANY WARRANTIES OF ANY KIND INCLUDING, BUT NOT LIMITED TO, WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, SECURITY, NON-INFRINGEMENT OF INTELLECTUAL PROPERTY, FREEDOM FROM COMPUTER VIRUS, OR WARRANTIES ARISING FROM COURSE OF DEALING OR COURSE OF PERFORMANCE. TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW, WE HEREBY DISCLAIM ALL WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, WITH RESPECT TO THE SERVICES AND OUR PRODUCTS AND SERVICES. WE DO NOT REPRESENT OR WARRANT THAT THE SERVICES OR ANY INFORMATION OR PRODUCTS OR SERVICES WE PROVIDE WILL BE UNINTERRUPTED OR ERROR-FREE, THAT DEFECTS WILL BE CORRECTED, OR THAT THE SERVICES IS FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. WE DO NOT MAKE ANY WARRANTIES OR REPRESENTATIONS REGARDING THE COMPLETENESS, CORRECTNESS, ACCURACY, ADEQUACY, USEFULNESS, TIMELINESS OR RELIABILITY OF THE SERVICES OR ANY INFORMATION OR PRODUCTS OR SERVICES WE PROVIDE, OR ANY OTHER WARRANTY, THE INFORMATION, MATERIALS, PRODUCTS AND SERVICES PROVIDED ON OR THROUGH THE SERVICES MAY BE OUT OF DATE, AND NEITHER COMPANY NOR ANY OF ITS AFFILIATES MAKES ANY COMMITMENT OR ASSUMES ANY DUTY TO UPDATE SUCH INFORMATION, MATERIALS, PRODUCTS OR SERVICES. THE FOREGOING EXCLUSIONS OF IMPLIED WARRANTIES DO NOT APPLY TO THE EXTENT PROHIBITED BY APPLICABLE LAW.</p>
                            <p>TO THE FULLEST EXTENT PERMISSIBLE BY APPLICABLE LAW, WE HEREBY DISCLAIM ALL WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING, ANY IMPLIED WARRANTIES WITH RESPECT TO THE PRODUCTS OR SERVICES LISTED ON OR PURCHASED ON OR THROUGH THESE SERVICES. WITHOUT LIMITING THE GENERALITY OF THE FOREGOING, WE HEREBY EXPRESSLY DISCLAIM ALL LIABILITY FOR PRODUCT DEFECT OR FAILURE, CLAIMS THAT ARE DUE TO NORMAL WEAR, PRODUCT MISUSE, ABUSE, PRODUCT MODIFICATION, IMPROPER PRODUCT SELECTION, NON-COMPLIANCE WITH ANY CODES, OR MISAPPROPRIATION. WE MAKE NO WARRANTIES TO THOSE DEFINED AS "CONSUMERS" IN THE MAGNUSON-MOSS WARRANTY-FEDERAL TRADE COMMISSION IMPROVEMENTS ACT. THE FOREGOING EXCLUSIONS OF IMPLIED WARRANTIES DO NOT APPLY TO THE EXTENT PROHIBITED BY APPLICABLE LAW.</p>
                            <p>NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED FROM COMPANY OR THROUGH COMPANY&rsquo;S SERVICES, PRODUCTS AND SERVICES WILL CREATE ANY WARRANTY NOT EXPRESSLY MADE HEREIN.</p>
                            <p><strong>LIMITATIONS OF LIABILITY.</strong> IN NO EVENT WILL COMPANY, OR ANY OF ITS OFFICERS, DIRECTORS, EMPLOYEES, SHAREHOLDERS, AFFILIATES, AGENTS, SUCCESSORS OR ASSIGNS, NOR ANY PARTY INVOLVED IN THE CREATION, PRODUCTION OR TRANSMISSION OF THESE SERVICES, BE LIABLE TO YOU OR ANYONE ELSE FOR ANY INDIRECT, SPECIAL, PUNITIVE, INCIDENTAL OR CONSEQUENTIAL DAMAGES (INCLUDING, WITHOUT LIMITATION, THOSE RESULTING FROM LOST PROFITS, LOST DATA OR BUSINESS INTERRUPTION) ARISING OUT OF THE USE, INABILITY TO USE, OR THE RESULTS OF USE OF THESE SERVICES, ANY SERVICES LINKED TO THESE SERVICES, OR THE MATERIALS, INFORMATION, PRODUCTS OR SERVICES CONTAINED ON OR PROVIDED IN CONNECTION WITH THE SERVICES, WHETHER BASED ON WARRANTY, CONTRACT, TORT OR ANY OTHER LEGAL THEORY AND WHETHER OR NOT ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. YOU SPECIFICALLY ACKNOWLEDGE THAT COMPANY SHALL NOT BE LIABLE FOR USER CONTENT OR THE DEFAMATORY, OFFENSIVE, OR ILLEGAL CONDUCT OF ANY THIRD PARTY, AND THAT THE RISK OF HARM OR DAMAGE FROM THE FOREGOING RESTS ENTIRELY WITH YOU. THE FOREGOING LIMITATIONS OF LIABILITY DO NOT APPLY TO THE EXTENT PROHIBITED BY APPLICABLE LAW.</p>
                            <p>IN THE EVENT OF ANY PROBLEM WITH THE SERVICES OR ANY CONTENT OR PRODUCTS OR SERVICES, YOU AGREE THAT YOUR SOLE REMEDY IS TO CEASE USING THE SERVICES OR THE CONTENT OR PRODUCTS OR SERVICES. IN NO EVENT SHALL COMPANYS TOTAL LIABILITY TO YOU FOR ALL DAMAGES, LOSSES, AND CAUSES OF ACTION WHETHER IN CONTRACT, TORT (INCLUDING, BUT NOT LIMITED TO, NEGLIGENCE), OR OTHERWISE EXCEED THE GREATER OF (A) TWENTY-FIVE DOLLARS (US $25.00) OR (B) THE VALUE OF YOUR PURCHASES ON THE SERVICES FOR THE SIX (6) MONTHS PRIOR TO YOU MAKING A CLAIM.</p>
                            <p>If you are a California resident and in connection with the foregoing releases, you hereby waive California Civil Code Section 1542 (and any similar provision in any other jurisdiction) which states: &ldquo;A general release does not extend to claims which the creditor does not know or suspect to exist in his favor at the time of executing the release, which, if known by him must have materially affected his settlement with the debtor.&rdquo;</p>
                            <p><strong>Indemnity.</strong> You agree to defend, indemnify and hold Company, each of our parent companies, subsidiaries and affiliates and the successors of each of the foregoing, and the officers, directors, agents, and employees of each of the foregoing, harmless from any and all liabilities, costs, and expenses, including reasonable attorneys&rsquo; fees, related to or in connection with (a) your use of the Services or your placement or transmission of any message or information on these Services by you or your authorized users; (b) your violation of any term or condition of these Terms, including without limitation, your breach of any of the representations and warranties; (c) your violation of any third-party rights, including without limitation any right of privacy, publicity rights or intellectual property rights; (d) your violation of any law, rule or regulation of the United States or any other country; (e) any claim or damages that arise as a result of any information or material that you provide to Company; or (f) any other party&rsquo;s access and use of the Services with your unique username, password or other appropriate security code.</p>
                            <p><strong>Release.</strong> If you have a dispute with another user or other party related to the Services, you release Company (and our officers, directors, agents, subsidiaries, joint ventures, and employees) from all claims, demands and damages (actual and consequential) of every kind and nature, known and unknown, suspected and unsuspected, disclosed and undisclosed, arising out of or in any way connected with such disputes.</p>
                            <p><strong>Termination.</strong> You or we may suspend or terminate your account or your use of these Services at any time, for any reason or for no reason. You are personally liable for any orders placed or charges incurred prior to termination. We may also block your access to our Services if (a) you breach these Terms; (b) we are unable to verify or authenticate any information you provide to us; (c) we believe that your actions may cause financial loss or legal liability for our users or us; or (d) or as otherwise provided herein or in another incorporated policy. You understand that any termination of your account, by you or Company, may involve the permanent deletion of your data. Company will not have any liability whatsoever to you for any suspension or termination, including for deletion of your data.</p>
                            <p><strong>General.</strong> Any claim arising out of or relating to the use of, these Services and the materials contained herein is governed by the laws of the State of New York as an agreement wholly performed therein without regard to its choice of law provisions and the United Nations Conventions on Contracts (if applicable). You consent to the exclusive jurisdiction of the state and federal courts located in New York, New York. You hereby irrevocably consent to such venue and to the exclusive jurisdiction of any such court over any such dispute. A printed version of these Terms will be admissible in judicial and administrative proceedings based upon or relating to these Terms to the same extent as other business documents originally generated and maintained in printed form. You shall comply with all applicable domestic and international laws, statutes, ordinances, and regulations regarding your use of the Services.</p>
                            <p>If any provision of these Terms is held to be invalid or unenforceable, such provision shall be struck and the remaining provisions shall be enforced. You agree that these Terms and all incorporated agreements may be assigned by Company in our sole discretion. Headings are for reference purposes only and in no way define, limit, construe or describe the scope or extent of such section. Our failure to act with respect to a breach by you or others does not waive our right to act with respect to subsequent or similar breaches. Except for additional terms and conditions that are provided at the time of purchase, including but not limited to additional terms associated with our events, these Terms are the entire agreement between you and Company with respects to the subject matter hereof and supersede any prior understandings or agreements (written or oral). Any provision that must survive to give proper effect to its intent (e.g., indemnity, general, any perpetual license, limitations on liability, disclaimers, representations, and warranties, etc) shall survive the expiration or termination of these Terms.</p>
                            <p>All rights not granted herein are expressly reserved to CoinDesk, Inc.</p>
                            <p>&nbsp;</p>
                            </div>
                            </div>
                            </div>
                            </section>',
            'privacy'=> '<section class="flex-grow" data-module-name="page" data-module-version="1.0.0" data-module-instance="default">
                            <div class="container">
                            <div class="w-full flex flex-col gap-8 md:max-w-[680px] m-auto">
                            <h1 class="text-color-black font-headline-lg font-medium">Privacy</h1>
                            <div class="document-body  font-body-lg"><small class="font-body-sm text-[#676767] leading-[1.3125rem]"><span style="text-decoration: underline;">Effective Date:</span> May 5, 2022.</small>
                            <p>&nbsp;</p>
                            <p>CoinDesk, Inc., including any affiliates and subsidiaries (&ldquo;CoinDesk,&rdquo; &ldquo;we,&rdquo; &ldquo;us,&rdquo; or &ldquo;our&rdquo;) values the trust you place in us when you use our affiliated websites and online services (collectively, our &ldquo;Websites&rdquo;). This Privacy Policy describes our collection, use, disclosure, and retention of information we collect from or about you. This Privacy Policy applies to our Websites that post or link to it, regardless of how you access or use them, including through mobile devices.</p>
                            <p>BY USING OUR WEBSITES, YOU ARE ACCEPTING THE TERMS OF THIS PRIVACY POLICY AND OUR <a href="https://www.coindesk.com/terms/">TERMS OF USE</a>, AND YOU ARE CONSENTING TO OUR COLLECTION, USE, DISCLOSURE, AND RETENTION OF INFORMATION AS DESCRIBED IN THIS PRIVACY POLICY.</p>
                            <p>If you do not agree to the terms of this Privacy Policy, please do not use our Websites. We may make changes to this Privacy Policy from time to time. We will post any changes to our Websites. Your continued use of our Websites following the posting of any changes will mean you accept those changes.</p>
                            <p>This Privacy Policy does not apply to information that you may submit to third-party websites or mobile applications that may link to the Websites or be linked to on the Websites. We are not responsible for the actions or privacy practices of third-party websites and applications; please consult those websites and applications directly to understand their privacy practices.</p>
                            <p><strong>INFORMATION WE COLLECT ABOUT YOU</strong></p>
                            <p>We collect, process, and retain information from you and any devices you may use when you use or interact with our Websites, and in other ways described below.</p>
                            <p><strong>Information You Give Us:</strong> We receive and store information provided to us or given to us in any other way, including your: name, mailing address, phone number, email address, picture, date of birth, payment information, registration information, social media and messaging platform handle, optional biographic and demographic information, processional and licensure information, information for wallets you create or connect via our Websites, survey responses, and any other information that you voluntarily provide. This includes information that you share with us on third-party websites and platforms.</p>
                            <p>If you apply for a job on our Websites, we will collect your name, contact information, resume/CV and cover letter, information from your LinkedIn Profile or website, and whether you require sponsorship for employment within the U.S. You will also have the opportunity to provide voluntary demographic and self-identification information; this information is not required and is not used for any employment decisions.</p>
                            <p><strong>Information We Automatically Collect:</strong> We receive and store certain types of information whenever you use our Websites. Our Websites may use &ldquo;cookies,&rdquo; tagging and other tracking technologies to help enable us to enhance or personalize your online experience. This information includes computer and connection information such as statistics on your page views, traffic to and from our Websites, referral URL, ad data, your IP address, device identifiers, transaction history, and your web log information. When you have any DESK tokens or a wallet connected to your account, we will also have information on the associated transfers, balances, transactions, and ledger.</p>
                            <p><strong>Location Information:</strong> When you visit our Websites or interact with our online services, we may receive information about your location and your device, including a unique identifier for your device. Location information allows us to provide location-based services, such as advertising and other personalized content. In addition, if you scan one of our QR codes, we will know the event, venue, or business associated with that code and, thus, your location at the time you scan the QR code.</p>
                            <p><strong>Information From Social Media:</strong> When you interact with us or our Websites on a social media platform, we may collect the personal information that you make available to us, including your account ID, username, and other information included in your posts. If you choose to log into your account with or through a social networking service, we and that service may share certain information about you and your activities. When you give us permission, we may also collect information from your social media account on your behalf.</p>
                            <p><strong>Information From Other Sources:</strong> We may supplement the information we collect with information offline or from third parties.</p>
                            <p><strong>HOW WE USE INFORMATION WE COLLECT FROM OR ABOUT YOU</strong></p>
                            <p>We use the information we collect from or about you to help us personalize and continually improve your experience on the Websites, including providing our services and conferences, responding to requests for information, analyzing and compiling trends and statistics, and communicating with you. For information about how to manage information about you and the choices you have, see the <strong>Your Choices</strong> section below.</p>
                            <p>We also may use information about you to: provide, maintain, and improve the Websites and for internal or other business purposes; run and administer our virtual and in-personal conferences; fulfill your requests for information; communicate with you; detect, investigate, and prevent activities that may violate our policies or be fraudulent or illegal; optimize, perform analysis, or improve our Websites, products, services, and operations; provide, produce, and ship the products that you order or the services you request; provide customer support; send you offers or other communications about our products and services, such as special or promotional events, including services, products, or events for which we collaborate or co-offer with a third party; administer contests, sweepstakes, promotions, and surveys; and to post user generated content provided by users.</p>
                            <p><strong>DESK Program:</strong> If you provide your wallet address as part of our DESK Program, we will not use or otherwise analyze your wallet address for any purpose other than to provide the DESK Program to you. As discussed below, your wallet address may be shared by our DESK Program with our program partners, sponsors, or service providers in order to enable or provide a program benefit that you have earned or redeemed. We contractually prohibit these third parties from using your wallet information for any purpose other than providing such benefits, and we require them to delete the data once the benefit has been provided. Your wallet address shared with the DESK Program will never be used by us for any of our journalistic or news reporting functions.</p>
                            <p>We may use the information from one portion of the Websites on other portions of the Websites, and we may combine information gathered from multiple portions of the Websites. We also may use or combine information that we collect offline, or that we collect or receive from third-party sources for many reasons, including to enhance, expand, and check the accuracy of our records. Additionally, we may use information collected from a particular browser or device with another computer or device that is linked to the browser or device on which such information was collected.</p>
                            <p>We may retain information we collect from or about you for as long as reasonably required to satisfy the purposes for which we have collected the information, or as required by law, whichever is longer. This means we will retain information about you both while you are an active user of our Websites and after you cease to be an active user.</p>
                            <p><strong>HOW WE SHARE YOUR INFORMATION WITH OTHERS</strong></p>
                            <p>We share information we collect from or about you with third parties as described below. In addition, we may share information that does not personally identify you, such as aggregate information, de-identified information, device identifiers, or other unique identifiers with third parties. For information about how to manage information about you and the choices you have, see the <strong>Your Choices</strong> section below.</p>
                            <p><strong>Third-Party Service Providers:</strong> We engage third-party service providers to perform functions on our behalf such as: hosting, content syndication, content management, technical integration, marketing, analytics, customer service, fraud protection, payment processing, fulfillment, and shipping. These third parties may have access to information about you when needed to perform their functions.</p>
                            <p><strong>Business Partners:</strong> We may share information that personally identifies you with business partners who provide products and services that we think you may be interested in.</p>
                            <p><strong>Sale, Assignment or Change of Control:</strong> We may change our ownership or corporate organization while providing the Websites. We may transfer some or all information about you in connection with, or during negotiations of, any merger, acquisition, sale of assets, or any line of business, change in ownership control, or financing transaction. Under such circumstances, we will request the acquiring party to follow the practices described in this Privacy Policy with respect to previously collected information. Nevertheless, we cannot promise that an acquiring party or the merged entity will have the same privacy practices or treat information about you in the same way as described in this Privacy Policy.</p>
                            <p><strong>Law Enforcement, Legal Process, and Emergency Situations:</strong> We may also use or disclose information we collect from or about you if required to do so by law or on the good-faith belief that such action is necessary to (a) conform to applicable law or comply with legal process served on us or our Websites; (b) protect and defend our rights or property, the Websites, or our users; (c) respond to a third party that alleges that you have infringed their intellectual property rights; or (d) act to protect the personal safety of us, users of the Websites, or the public.</p>
                            <p><strong>Public Areas, Interactive Features and Activities:</strong> Please remember that any information you share in public areas, including in your public profile, or on social sharing features becomes public and anyone may take and use that information. Please be careful about what you disclose and do not post any information that you expect to keep private. Please consult the applicable guidelines, if any, for use of these features. We cannot control who views information that you post in public areas of the Websites or on third-party messaging platforms, like Discord, and are not responsible for how third parties, including other users may use or disclose information that you post or otherwise share with other users or third parties. If you are under the age of eighteen and a registered user, you may have a content or information you have posted removed from public display by deleting the message yourself or contacting the community manager.</p>
                            <p><strong>At Your Direction:</strong> Our Websites may give you the ability to share certain information with other users or other third parties, such as by scanning your &ldquo;My Code.&rdquo; When you engage these features on our Websites, you are authorizing us to share your information. Once shared, we have no control how those third parties will use or further disclose your information.</p>
                            <p><strong>HOW TO ACCESS AND UPDATE YOUR INFORMATION</strong></p>
                            <p>If you have an account with us, you can update information you have provided by logging into your account and editing the information. Please note that you may not be able to change some information, like your username or email, after your account is established. You may be required to provide us with sufficient information to verify your identity prior to accessing any records containing information about you. We may not accommodate a request to change information about you if we believe doing so would violate any law or legal requirement or cause the information to be incorrect.</p>
                            <p><strong>COOKIES AND OTHER TRACKING TECHNOLOGIES</strong></p>
                            <p>Like many websites, we use tracking technologies such as cookies, web beacons, and similar technologies to record your preferences, track the use of our Websites, your interactions with our emails, and measure exposure to our online advertisements. We may also use these technologies to monitor traffic, improve the Websites, and make it easier to use and more relevant. Most web browsers automatically accept cookies but, if you prefer, you can usually modify your browser setting to disable or reject cookies. In addition, you may also render some web beacons unusable by rejecting or removing their associated cookies. If you delete your cookies or if you set your browser to decline cookies, some features of the Websites may not work or may not work as designed.</p>
                            <p>We use third-party analytics services on the Websites, including Google Analytics. These analytics service providers use cookies or other tracking technologies to help us analyze how users interact with and use our Websites, compile reports about activity on Websites, and provide us other services. The technologies may collect information such as your IP address, time of visit, whether you are a return visitor, any referring website, general location, and other information. We do not use these analytics service providers to gather information that personally identifies you. The information generated by Google Analytics will be transmitted to and stored by Google and will be subject to Google&rsquo;s <a href="http://www.google.com/policies/privacy/" target="_blank" rel="noopener">privacy policies</a>. To learn more about Google&rsquo;s partner services and to learn how to opt out of tracking of analytics by Google click <a href="https://www.google.com/policies/privacy/partners/" target="_blank" rel="noopener">here</a>.</p>
                            <p>We work with third-party companies who also use these technologies to provide advertisements on our Websites and other third-party websites. These third parties may use these technologies to collect information about you when you use the Websites. They may collect information about your online activities over time and across different websites and other online services. They may also use persistent identifiers to track your Internet usage across other websites in their networks beyond our Websites. They may use this information to provide you with interest-based advertising or other targeted content. While we do not knowingly provide these entities with information that personally identifies you, such third parties may, with sufficient data from other sources, be able to personally identify you, unknown to us. More information about how to opt-out of these cookies is available in the <strong>Choices</strong> section below.</p>
                            <p>The cookies used on our Websites are divided into four general categories:</p>
                            <p><em>Necessary:</em> Cookies that are essential to make our Websites usable by enabling basic functions like page navigation, access to secures areas of the Website, and whether you have opted-out of certain non-necessary cookies. The Websites cannot function properly without these cookies. These mandatory cookies cannot be de-selected from our consent manager.</p>
                            <p><em>Preferences:</em> Cookies that enable our Websites to remember information that changes the way the Websites behaves or looks, like your preferred language or region that you are in.</p>
                            <p><em>Analytics and Statistics:</em> Cookies that help us understand how visitors interact with our Websites by collecting and reporting about your device&rsquo;s interactions.</p>
                            <p><em>Marketing:</em> Used to track devices across websites to display ads that are relevant and engaging to our visitors to show you our ads on third-party websites. You may also deny or delete these cookies via your browser settings.</p>
                            <p>Some content, applications, and advertisements on the Websites may be served by unaffiliated third parties. We do not control these third parties&rsquo; tracking technologies or how they may be used. We are not responsible for the content or privacy practices on any website not operated by us to which our Websites links or that links to our Websites.</p>
                            <p>Your browser or device may include &ldquo;Do Not Track&rdquo; functionality. Our information collection, disclosure practices, and the choices that we provide, will continue to operate as described in this Privacy Policy, whether or not a Do Not Track signal is received.</p>
                            <p><strong>YOUR CHOICES ABOUT HOW INFORMATION ABOUT YOU IS USED AND SHARED</strong></p>
                            <p>In many instances, you have choices about the information you provide and how we use that information. These choices are described below. California residents and data subjects in Europe have additional rights as set forth in the sections entitled <strong>Notice to Residents of California</strong> and <strong>Notice to Residents of the European Economic Area, Switzerland, and United Kingdom</strong> below.</p>
                            <p><strong>Marketing Emails:</strong> By providing us with an e-mail address, you acknowledge that we may use your e-mail address to communicate with you. While you cannot opt-out of receiving notifications and other service-related communications regarding your account or your transactions, you can opt-out of receiving promotional and other marketing emails from us by using the &ldquo;unsubscribe&rdquo; feature in our marketing e-mails.</p>
                            <p><strong>Text Messages:</strong> If you have opted-in to one of our text messages programs, you can opt-out at any time by replying &ldquo;STOP&rdquo; at any time.</p>
                            <p><strong>Interest-Based Advertising Choices:</strong> You also have choices related to interest-based advertising. Many browsers automatically accept cookies, but you can usually modify your browser&rsquo;s setting to decline cookies if you prefer. Note that if you choose to remove cookies, you may remove opt-out cookies that affect your advertising preferences.</p>
                            <p>Many of the third-party advertisers that place tracking tools on our Websites are members of programs that offer you additional choices regarding the use of information about you for advertising. You can learn more about the options available to limit these third parties&rsquo; use of your information by visiting the websites for the <a href="http://www.networkadvertising.org/choices/" target="_blank" rel="noopener">Network Advertising Initiative</a> and the <a href="http://www.aboutads.info/choices/" target="_blank" rel="noopener">Digital Advertising Alliance</a>.</p>
                            <p>Similarly, you can learn about your options to opt-out of mobile app tracking by certain advertising networks through your device settings. For more information about how to change these settings, see the support information for <a href="https://support.apple.com/en-us/HT205223" target="_blank" rel="noopener">Apple</a>, <a href="https://policies.google.com/technologies/ads" target="_blank" rel="noopener">Android</a> or <a href="http://choice.microsoft.com/en-US/opt-out" target="_blank" rel="noopener">Windows</a> devices.</p>
                            <p>Please note that opting-out of participating advertising networks services does not mean that you will not receive advertising while using our Websites or on other websites, nor will it prevent the receipt of interest-based advertising from third parties that do not participate in these industry programs.</p>
                            <p><strong>NOTICE TO RESIDENTS OF CALIFORNIA</strong></p>
                            <p>This section is part of our Privacy Policy but applies only to residents of California. State law provides you with certain rights to receive disclosure regarding the collection, use, and sharing of &ldquo;personal information,&rdquo; as well as rights to access, delete, and restrict the sale of certain personal information we collect about you. You or your authorized agent may submit a request to exercise these rights by sending us an email at <a href="mailto:privacy@coindesk.com" target="_blank" rel="noopener">privacy@coindesk.com</a>. You have the right not to receive discriminatory treatment for the exercise of the privacy rights conferred by applicable law.</p>
                            <p><strong>Collection and Use of Personal Information:</strong> The general sections of this Privacy Policy describe the types of personal information we collect, how we collect it, and how we use it. The following is a list of categories of personal information that we may have collected from or about consumers and the sources of that information:</p>
                            <p><em>Identifiers:</em> Name, alias, postal address, unique personal identifier, online identifier, IP address, email address, account name, or other similar identifiers. This information is provided by you, automatically collected when you interact with our Website, or is provided by a third party.</p>
                            <p><em>Customer records:</em> Name, address, telephone number, education, employment, or payment account number. This information is provided by you, automatically collected when you interact with our Website, or is provided by a third party.</p>
                            <p><em>Protected classifications:</em> Race, sexual orientation, gender identity, or disability. This information is provided by you, such as voluntarily disclosed as part of job application.</p>
                            <p><em>Commercial information:</em> Records of products or services purchased, obtained, or considered, or other purchasing or consuming histories or tendencies. This information is automatically collected based on your interactions with our Website, your purchases, and your subscriptions.</p>
                            <p><em>Internet or other electronic network activity information:</em> Browsing history, search history, and information regarding interactions with our Website or advertisements. This information is automatically collected when you interact with our Website, or is provided by a third party, such as an advertising or analytics provider.</p>
                            <p><em>Geolocation:</em> General or precise location information. This is provided by you when you provide you address or other location information, scan a QR code or check-in at a location, or inferred based on your IP address.</p>
                            <p><em>Professional and education data:</em> Employer, title, professional license numbers, work history, and educational background. This information is provided by you, such as your conference registration or job application, or is provided by a third party.</p>
                            <p><em>Inferences:</em> Information about your preferences, characteristics, predisposition, demographic info, attitudes, and favorites. This information is provided by you, automatically collected when you interact with our Website, or is provided by a third party.</p>
                            <p>We collect and use the above categories of personal information for the purposes described above in the sections entitled <strong>How We Use Information We Collect From or About You, How We Share Your Information with Others</strong>, and <strong>Cookies and Other Tracking Technologies</strong>. We limited disclosures of personal information for business purpose to services providers, as described above.</p>
                            <div>
                            <div id="dnsmpi"></div>
                            </div>
                            <p><strong>Sale of Personal Information and Right to Opt Out:</strong> State law requires companies to include certain disclosures including a &ldquo;Do Not Sell My Personal Info&rdquo; links on their websites. We do not knowingly sell the personal information of consumers under 16 years of age. To opt out of the sale to third parties, please sending us an email at <a href="mailto:privacy@coindesk.com" target="_blank" rel="noopener">privacy@coindesk.com</a> and using the cookie manager on our Website to disable non-necessary cookies. Please note that your right to opt out does not apply to our sharing of data with service providers, with whom we work and who are required to use the data on our behalf.</p>
                            <p>The following categories of personal information that are disclosed for a business purpose or &ldquo;sold&rdquo; and the related categories of third parties:</p>
                            <p><em>Identifiers:</em> Name, email, unique personal identifiers, online identifiers, IP address, or other similar identifiers to affiliates, business partners, advertising and marketing companies, data analytics providers, and social networks.</p>
                            <p><em>Internet or other electronic network activity information:</em> info regarding your interaction with an internet website, application, or advertisement to affiliates, business partners, advertising and marketing companies, data analytics providers, and social networks.</p>
                            <p><strong>Rights Requests:</strong> As noted above, you have the right to request that we disclose what personal information we collect, use, and sell, as well as the right to request that we delete certain personal information that we have collected from you. You or your authorized agent may submit a request to exercise these rights <strong>by using our</strong>&nbsp;<a href="https://rfi.coindesk.com/"><strong>Request for Information</strong></a>&nbsp;<strong>or</strong>&nbsp;<a href="https://rfd.coindesk.com/"><strong>Request for Deletion</strong></a>&nbsp;<strong>tool or</strong> sending us an email at <a href="mailto:privacy@coindesk.com" target="_blank" rel="noopener">privacy@coindesk.com</a>. We will require you to verify your identity before we can act on your request. You are required to provide your name and email address, your cell phone number if you have sign-up to received text messages from us, or wallet address if you have linked that with your account to start the verification process.</p>
                            <p><strong>Financial Incentives:</strong> We may run promotions from time to time and ask you to share personal information with us. We will always give you clear notice about these types of programs when you sign up, and participation is always voluntary. If you change your mind, you will be able to opt out, and if you do not participate, you will still be able to use our services.</p>
                            <p><strong>California &ldquo;Shine the Light&rdquo; Rights:</strong> If you are a California resident and customer, California law permits you to request certain information regarding the disclosure of your information about you by us and our related companies to third parties for the third parties direct marketing purposes. To make such a request, please sending us an email at <a href="mailto:privacy@coindesk.com" target="_blank" rel="noopener">privacy@coindesk.com</a>.</p>
                            <p><strong>NOTICES TO RESIDENTS OF THE EUROPEAN ECONOMIC AREA, SWITZERLAND, AND UNITED KINGDOM</strong></p>
                            <p>This section is part of our Privacy Policy but applies only to residents of the European Economic Area (EEA), Switzerland, and United Kingdom. For purposes of data protection law, CoinDesk, Inc. is the controller.</p>
                            <p><strong>Purposes of Processing:</strong> As described in the other sections of our Privacy Policy, we process your personal data to administer our Websites, process your requests, facilitate access by our service providers and third parties, send marketing communications, respond to your requests in connection with employment opportunities, transfer or sell our business, to combine data sets, and for the other purposes set forth in our Privacy Policy. Also as explained above, we may also use, transfer, and otherwise use personal data acquired from you directly or by use of cookies or other tracking technologies to remember your preferences, conduct analytics, and serve you with advertising.</p>
                            <p><strong>Legal Basis:</strong> We have several different legal grounds on which we collect and process personal data, including (a) as necessary to perform a transaction (such as registering for a conference, subscribing to our newsletters, inquiring about employment, or responding to your requests); (b) as necessary to comply with a legal obligation; (c) where you have provided consent; and (d) necessary for legitimate interest when such processing is reasonably expected by you and does not unduly and negatively affect your privacy rights. If you would like to withdraw your consent, please use the options that are described in the <strong>Your Choices</strong> section above. Please keep in mind that additional basis my still exist for processing that is not based on your consent.</p>
                            <p><strong>Transfers:</strong> Your personal data may be transferred to and processed in the United States or elsewhere in the world that may not provide the same level of data protection as your home country. We will ensure that transfers of personal data are subject to appropriate safeguards in accordance with applicable legal requirements to ensure that your data is adequately protected.</p>
                            <p><strong>Your Rights:</strong> You have certain rights under applicable law. These rights include (1) to obtain information about the processing of your personal data and a copy of your personal data that we store; (2) to request that we update your personal data if it is inaccurate or incomplete; (3) to request the deletion of your personal data if it is no longer necessary for the purposes for which it was collected or if you withdraw consent and no other legal basis for processing exists; (4) to restrict the processing if you contest the accuracy of your personal data, if our processing is deemed unlawful and you oppose deletion, or if we no longer need the personal data but must store it to comply with our legal obligations; (5) to receive your personal data and to transfer it to another controller; (6) to object to our processing when we process your personal data based on legitimate interest; and (7) to lodge a complaint about our collection or processing of your personal data with your Data Protection Authority (DPA).</p>
                            <p>If you would like to exercise rights (1) through (6), please sending us an email at <a href="mailto:privacy@coindesk.com" target="_blank" rel="noopener">privacy@coindesk.com</a>. To verify your identity, we may require you to provide us with personal data prior to accessing any records about you. If you would like to file a complaint with your DPA, contact details for the DPAs in the EEA and UK are available at <a href="http://ec.europa.eu/justice/article-29/structure/data-protection-authorities/index_en.htm" target="_blank" rel="noopener">ec.europa.eu/justice/article-29/structure/data-protection-authorities/index_en.htm</a> and for Switzerland at <a href="https://www.edoeb.admin.ch/edoeb/en/home/the-fdpic/links/data-protection---switzerland.html" target="_blank" rel="noopener">https://www.edoeb.admin.ch/edoeb/en/home/the-fdpic/links/data-protection---switzerland.html</a>.</p>
                            <p>You are not required to provide all personal data identified in this Privacy Policy to use our Websites, purchase our services, or to interact with us offline, but certain functionality may not be available to you. If you do not provide your personal information, we may not be able to respond to your requests, perform a transaction with you, or provide you with marketing that we believe you would find valuable. We do not use automated decision-making without human intervention, including profiling, in a way that procedures legal effects concerning you or otherwise significantly affects you.</p>
                            <p><strong>OTHER IMPORTANT INFORMATION</strong></p>
                            <p><strong>Users Under Thirteen:</strong> Our Websites are intended for users ages thirteen and older only. If we become aware of information in our database that was collected from a child under thirteen, we will delete such information.</p>
                            <p><strong>Users Outside of the United States:</strong> If you use our Websites outside of the United States, you understand and consent to the transfer of information we collect from or about you to, and the collection, processing, and storage of information about you in, the United States and elsewhere. The laws in the U.S. and these countries may be different than the laws of your country.</p>
                            <p><strong>For questions about our Privacy Policy, you can contact us at</strong>&nbsp;<strong><a href="mailto:privacy@coindesk.com" target="_blank" rel="noopener">privacy@coindesk.com</a>.</strong></p>
                            <p>All rights reserved.</p>
                            </div>
                            </div>
                            </div>
                            </section>',
            'cookie'=>'<h3 id="CybotCookiebotDialogBodyContentTitle" role="heading" aria-level="1"><strong>Responsible use of your data</strong></h3>
                        <div id="CybotCookiebotDialogBodyContentText">We and&nbsp;<a id="CybotCookiebotDialogBodyContentTextShowIABVendors" href="https://www.coindesk.com/terms">our 922 partners</a> process your personal data, e.g. your IP-number, using technology such as cookies to store and access information on your device in order to serve personalized ads and content, ad and content measurement, audience research and services development. You have a choice in who uses your data and for what purposes. You can change or withdraw your consent any time from the Cookie Declaration or by clicking on the Privacy trigger icon.<br><br>If you allow, we would also like to:
                        <ul>
                        <li>Collect information about your geographical location which can be accurate to within several meters</li>
                        <li>Identify your device by actively scanning it for specific characteristics (fingerprinting)</li>
                        </ul>
                        <span id="CybotCookiebotDialogSpecialFeaturesText"></span>Find out more about how your personal data is processed and set your preferences in the <a id="CybotCookiebotDialogBodyContentTextToggleDetails" href="https://www.coindesk.com/terms">details section</a>.<br><br>We use cookies to personalise content and ads, to provide social media features and to analyse our traffic. We also share information about your use of our site with our social media, advertising and analytics partners who may combine it with other information that you&rsquo;ve provided to them or that they&rsquo;ve collected from your use of their services. You consent to our cookies if you continue to use our website.</div>',
            'accessibility'=> '<section class="flex-grow" data-module-name="page" data-module-version="1.0.0" data-module-instance="default">
                                <div class="container">
                                <div class="w-full flex flex-col gap-8 md:max-w-[680px] m-auto">
                                <h1 class="text-color-black font-headline-lg font-medium">Accessibility Help</h1>
                                <div class="document-body  font-body-lg">
                                <p>We strive to produce a Web site that is accessible to individuals with disabilities. However, if you encounter any difficulty in using our website, please email (<a href="mailto:help@coindesk.com" target="_blank" rel="noopener">help@coindesk.com</a>) us for assistance.</p>
                                <div>
                                <div style="padding-bottom: 416px;">&nbsp;</div>
                                </div>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                </div>
                                </div>
                                </div>
                                </section>',
            'advertising'=> '<section class="flex-grow" data-module-name="page" data-module-version="1.0.0" data-module-instance="default">
                                <div class="container">
                                <div class="w-full flex flex-col gap-8 md:max-w-[680px] m-auto">
                                <h1 class="text-color-black font-headline-lg font-medium">Advertise</h1>
                                <h2 class="text-color-black font-headline-sm font-medium text-[#676767]">Want to target our engaged audience, co-create thought leadership content or create trust and awareness for new users to your brand?</h2>
                                <div class="document-body  font-body-lg">
                                <p>Advertise your product or service by reaching CoinDesks global audience of highly engaged professionals, investors, and enthusiasts interested in cryptocurrencies, blockchain technology, decentralized finance (DeFi), and Web3.</p>
                                <p>CoinDesk is the gateway to blockchain and the future of finance. We are a trusted source for news, research, and analytics. Our long-standing reputation and credibility make it an authoritative platform to advertise on.</p>
                                <hr>
                                <ul class="unordered-list">
                                <li>4 million+ unique visitors*</li>
                                <li>300,000+ monthly downloads for the CoinDesk Podcast Network</li>
                                <li>1.7M monthly on-site video views.</li>
                                <li>CoinDesk TV features live daily and weekly streaming shows</li>
                                <li>643,000+ newsletter subscribers</li>
                                <li>4.1M+ social mMedia followers</li>
                                <li>CoinDesk&rsquo;s Consensus is the leading annual event in crypto</li>
                                </ul>
                                <small class="font-body-sm text-[#676767] leading-[1.3125rem]">*Q3 2024 average</small>
                                <p>&nbsp;</p>
                                <hr>
                                <h2 class="font-headline-sm font-medium">Our audience are affluent, professional, next generation decision makers.</h2>
                                <ul class="unordered-list">
                                <li>21% are Financial Decision Makers</li>
                                <li>75% are skilled users of new technology and rely heavily on technology and new gadgetry</li>
                                <li>51% are Crypto/Blockchain-curious learners</li>
                                <li>43% are IT Decision Makers</li>
                                <li>76% are Investment Leaders</li>
                                <li>72% are ages 18-44</li>
                                <li>CoinDesk.com reaches 130k+ companies showing intent for cryptocurrency and 80% of companies with intent for regulatory compliance solutions</li>
                                </ul>
                                <hr>
                                <h2 class="font-headline-sm font-medium">See Our Media Kit and Get in Touch</h2>
                                <p>Want to target our engaged audience, co-create thought leadership content, license content or create trust and awareness for new users to your brand? We&rsquo;re happy to partner with you!</p>
                                <p>Reach out to us at <a href="mailto:advertising@coindesk.com" target="_blank" rel="noopener">advertising@coindesk.com</a> or download our kit for more information.</p>
                                </div>
                                </div>
                                </div>
                                </section>',
             //-------------------------------
            'first'=> true,
            'language'=> false,
            'top_ticker'=> true,
            'advert'=> true,
            'top_event'=> true,
            'event_section'=> true,
            'podcast'=> true,
            'most_read'=> true,
            'newsletter'=> true,
             //-------------------------------
            'masthead'=> '<section class="flex-grow flex flex-col gap-8 items-center" data-module-name="masthead" data-module-version="1.0.0" data-module-instance="default">
                        <div class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
                        <div class="flex justify-center">
                        <div class="md:max-w-[680px]">
                        <div class="flex flex-col gap-6 md:gap-8">
                        <div class="flex flex-col gap-6">
                        <h1 class="text-color-black font-sans text-color-charcoal-900 laptop:text-[2.5rem] laptop:leading-[3.125rem] mobile:text-[2rem] mobile:leading-10 font-bold">Masthead</h1>
                        <div class="document-body  font-body-lg">
                        <p>CoinDesk is the leading media platform for news, insights and analysis of the technologies reshaping money and commerce in the 21st century. Our team of dedicated journalists spans the globe. Here are our editorial staff members and how to best contact them. You can also <a href="https://twitter.com/i/lists/1239357354472288256" target="_blank" rel="noopener">follow them on Twitter</a>.</p>
                        <p>&nbsp;</p>
                        <p>If someone outside of this list contacts you on Twitter, Telegram or other channels claiming to be a CoinDesk staffer, immediately notify <a href="mailto:fraud@coindesk.com" target="_blank" rel="noopener">fraud@coindesk.com</a>.</p>
                        </div>
                        </div>
                        <div class="basis-full border-solid border-t border-charcoal-600">&nbsp;</div>
                        <p class="font-sans text-color-charcoal-600 text-[0.875rem] leading-[1.3125rem] tracking-[.00625rem] font-semibold uppercase">Breaking News</p>
                        <div class="grid xsmin:grid-cols-2 xxs:grid-cols-1 gap-6">
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/aoyon-ashraf">Aoyon Ashraf</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Managing Editor, Breaking News</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/parikshit-mishra">Parikshit Mishra</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Regional Head of Asia</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/sheldon-reback">Sheldon Reback</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Regional Head of Europe</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/jamie-crawley">Jamie Crawley</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">News Reporter</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        </div>
                        <div class="basis-full border-solid border-t border-charcoal-600">&nbsp;</div>
                        <p class="font-sans text-color-charcoal-600 text-[0.875rem] leading-[1.3125rem] tracking-[.00625rem] font-semibold uppercase">Data &amp; Tokens</p>
                        <div class="grid xsmin:grid-cols-2 xxs:grid-cols-1 gap-6">
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/danny-nelson">Danny Nelson</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Managing Editor - Data &amp; Tokens</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/oliver-knight">Oliver Knight</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">News Reporter</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/shaurya-malwa">Shaurya Malwa</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Deputy Manager Editor, Data &amp; Tokens</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        </div>
                        <div class="basis-full border-solid border-t border-charcoal-600">&nbsp;</div>
                        <p class="font-sans text-color-charcoal-600 text-[0.875rem] leading-[1.3125rem] tracking-[.00625rem] font-semibold uppercase">Finance &amp; Deals</p>
                        <div class="grid xsmin:grid-cols-2 xxs:grid-cols-1 gap-6">
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/ian-allison">Ian Allison</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Senior Reporter</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/will-canny">Will Canny</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Finance Reporter</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/helene-braun">Helene Braun</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Exchanges &amp; TradFi Reporter</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        </div>
                        <div class="basis-full border-solid border-t border-charcoal-600">&nbsp;</div>
                        <p class="font-sans text-color-charcoal-600 text-[0.875rem] leading-[1.3125rem] tracking-[.00625rem] font-semibold uppercase">Global Policy &amp; Regulation</p>
                        <div class="grid xsmin:grid-cols-2 xxs:grid-cols-1 gap-6">
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/nikhilesh-de">Nikhilesh De</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Managing Editor, Global Policy &amp; Regulation</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/jesse-hamilton">Jesse Hamilton</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Deputy Managing Editor, Global Policy and Regulation</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/cheyenne-ligon">Cheyenne Ligon</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">News Reporter</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/camomile-shumba">Camomile Shumba</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Regulatory Reporter, UK</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        </div>
                        <div class="basis-full border-solid border-t border-charcoal-600">&nbsp;</div>
                        <p class="font-sans text-color-charcoal-600 text-[0.875rem] leading-[1.3125rem] tracking-[.00625rem] font-semibold uppercase">Markets</p>
                        <div class="grid xsmin:grid-cols-2 xxs:grid-cols-1 gap-6">
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/stephen-alpher">Stephen Alpher</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Co-regional news chief, Americas</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/omkar-godbole">Omkar Godbole</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Co-Managing Editor, Markets Team</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/sam-reynolds">Sam Reynolds</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Senior Reporter, Asia</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/krisztian-sandor">Krisztian Sandor</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Reporter</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/james-van-straten">James Van Straten</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">senior analyst</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/tom-carreras">Tom Carreras</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Reporter</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        </div>
                        <div class="basis-full border-solid border-t border-charcoal-600">&nbsp;</div>
                        <p class="font-sans text-color-charcoal-600 text-[0.875rem] leading-[1.3125rem] tracking-[.00625rem] font-semibold uppercase">Tech</p>
                        <div class="grid xsmin:grid-cols-2 xxs:grid-cols-1 gap-6">
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/sam-kessler">Sam Kessler</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Deputy Managing Editor</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/margaux-nijkerk">Margaux Nijkerk</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Tech Reporter, Protocols</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        </div>
                        <div class="basis-full border-solid border-t border-charcoal-600">&nbsp;</div>
                        <p class="font-sans text-color-charcoal-600 text-[0.875rem] leading-[1.3125rem] tracking-[.00625rem] font-semibold uppercase">Consensus Magazine</p>
                        <div class="grid xsmin:grid-cols-2 xxs:grid-cols-1 gap-6">
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/ben-schiller">Ben Schiller</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Managing Editor, Features and Opinion</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/jeff-wilser">Jeff Wilser</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Contributor</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/christie-harkin">Christie Harkin</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Managing Editor</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        </div>
                        <div class="basis-full border-solid border-t border-charcoal-600">&nbsp;</div>
                        <p class="font-sans text-color-charcoal-600 text-[0.875rem] leading-[1.3125rem] tracking-[.00625rem] font-semibold uppercase">Operations &amp; Strategy</p>
                        <div class="grid xsmin:grid-cols-2 xxs:grid-cols-1 gap-6">
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/betsy-farber">Betsy Farber</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Senior Editor, Content Operations</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        </div>
                        <div class="basis-full border-solid border-t border-charcoal-600">&nbsp;</div>
                        <p class="font-sans text-color-charcoal-600 text-[0.875rem] leading-[1.3125rem] tracking-[.00625rem] font-semibold uppercase">Audience Development</p>
                        <div class="grid xsmin:grid-cols-2 xxs:grid-cols-1 gap-6">
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div>
                        <p class="font-sans text-color-charcoal-900 text-base">Robbi Carroll</p>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Social Media &amp; Community Engagement</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/joe-lautzenhiser">Joe Lautzenhiser</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Editorial and SEO Analyst</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        </div>
                        <div class="basis-full border-solid border-t border-charcoal-600">&nbsp;</div>
                        <p class="font-sans text-color-charcoal-600 text-[0.875rem] leading-[1.3125rem] tracking-[.00625rem] font-semibold uppercase">Multimedia</p>
                        <div class="grid xsmin:grid-cols-2 xxs:grid-cols-1 gap-6">
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/christine-lee">Christine Lee</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Senior Anchor</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/jennifer-sanasie">Jennifer Sanasie</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Executive Editor, Senior Anchor</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div>
                        <p class="font-sans text-color-charcoal-900 text-base">Victor Chen</p>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Production Assistant</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/sam-ewen">Sam Ewen</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">SVP, Head of Social, Multimedia &amp; CoinDesk Studios</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        </div>
                        <div class="basis-full border-solid border-t border-charcoal-600">&nbsp;</div>
                        <p class="font-sans text-color-charcoal-600 text-[0.875rem] leading-[1.3125rem] tracking-[.00625rem] font-semibold uppercase">Events &amp; Programming</p>
                        <div class="grid xsmin:grid-cols-2 xxs:grid-cols-1 gap-6">
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div>
                        <p class="font-sans text-color-charcoal-900 text-base">John Belding</p>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Deputy Director, Events Programming</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        </div>
                        <div class="basis-full border-solid border-t border-charcoal-600">&nbsp;</div>
                        <p class="font-sans text-color-charcoal-600 text-[0.875rem] leading-[1.3125rem] tracking-[.00625rem] font-semibold uppercase">CoinDesk Studios</p>
                        <div class="grid xsmin:grid-cols-2 xxs:grid-cols-1 gap-6">
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div><a class="font-sans text-color-charcoal-900 text-base" href="author/sam-ewen">Sam Ewen</a>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">SVP, Head of Social, Multimedia &amp; CoinDesk Studios</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        </div>
                        <div class="basis-full border-solid border-t border-charcoal-600">&nbsp;</div>
                        <p class="font-sans text-color-charcoal-600 text-[0.875rem] leading-[1.3125rem] tracking-[.00625rem] font-semibold uppercase">Product and Engineering</p>
                        <div class="grid xsmin:grid-cols-2 xxs:grid-cols-1 gap-6">
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div>
                        <p class="font-sans text-color-charcoal-900 text-base">Matthew Stublefield</p>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Director of Product Management</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div>
                        <p class="font-sans text-color-charcoal-900 text-base">C. Spencer Beggs</p>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Director of Engineering</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        <div class="flex flex-col gap-4">
                        <div class="border-solid border-t border-charcoal-50">&nbsp;</div>
                        <div>
                        <p class="font-sans text-color-charcoal-900 text-base">Alex Lebedyev</p>
                        <p class="font-sans text-color-charcoal-600 text-xs leading-[1.3125rem] tracking-[.025rem] uppercase">Director of Technology</p>
                        </div>
                        <div class="flex flex-row items-center gap-6">&nbsp;</div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </section>',
            'twitter'=> '',
            'facebook'=> '',
            'linkedin'=> '',
            'instagram'=> '',
            'youtube'=> '',
            'tiktok'=> '',
            'discord'=> '',
            'telegram'=> '',
             //-------------------------------
            'apple'=> '',
            'google'=> ''
        
        ]);
    }
}
