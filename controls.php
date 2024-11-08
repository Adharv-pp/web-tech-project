<?php
$isRegisteredUser = false; 
if ($isRegisteredUser) 
{
    echo "<div style='background-color: #e7f3fe; border: 1px solid #c3e6cb; padding: 20px; margin: 10px 0; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);'>
            <h2 style='color: #31708f;'>Welcome Back!</h2>
            <p style='color: #555;'>Thank you for being a valued member of ABC News. Here’s some exclusive content just for you!</p>
            <ul style='list-style-type: none; padding: 0;'>
                <li style='margin-bottom: 15px;'>
                    <strong>Exclusive Article 1: The Future of Renewable Energy</strong>
                    <p>As the world shifts towards sustainability, renewable energy technologies such as solar and wind are becoming more prevalent. Countries are investing heavily in infrastructure to harness these resources. Innovations like energy storage and smart grids are paving the way for a cleaner future. The goal is to reduce reliance on fossil fuels and minimize the impact of climate change.</p>
                </li>
                <li style='margin-bottom: 15px;'>
                    <strong>Exclusive Article 2: Breaking Down the Latest Economic Trends</strong>
                    <p>The global economy is experiencing significant changes, with inflation rates fluctuating across various regions. Analysts are concerned about the impact on consumer spending and investment. As supply chains continue to recover from the pandemic, businesses are adapting to new market demands. Understanding these trends is crucial for making informed financial decisions.</p>
                </li>
                <li style='margin-bottom: 15px;'>
                    <strong>Exclusive Article 3: Innovations in Healthcare Technology</strong>
                    <p>Healthcare technology is evolving at an unprecedented pace, with advancements in telemedicine and AI-driven diagnostics. These innovations are enhancing patient care and accessibility, especially in remote areas. Wearable devices are empowering individuals to monitor their health proactively. The integration of data analytics is also transforming how healthcare providers deliver services.</p>
                </li>
                <li style='margin-bottom: 15px;'>
                    <strong>Exclusive Article 4: The Rise of Electric Vehicles</strong>
                    <p>Electric vehicles (EVs) are rapidly gaining popularity as consumers seek greener alternatives. Major automotive manufacturers are investing in EV technology, resulting in improved range and performance. Government incentives are encouraging the adoption of electric vehicles, aiming to reduce carbon emissions. The shift towards EVs is reshaping the automotive industry and urban transportation.</p>
                </li>
                <li style='margin-bottom: 15px;'>
                    <strong>Exclusive Article 5: Advancements in Artificial Intelligence</strong>
                    <p>Artificial Intelligence is transforming various sectors, from finance to education. Recent developments in machine learning and natural language processing are driving innovation. Businesses are leveraging AI for enhanced customer experiences and operational efficiencies. As AI technology matures, ethical considerations and regulations are becoming increasingly important.</p>
                </li>
            </ul>
          </div>";
} else {
    echo "<div style='background-color: #d4edda; border: 1px solid #c3e6cb; padding: 20px; margin: 10px 0; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);'>
            <h2 style='color: #155724;'>Welcome to ABC News!</h2>
            <p style='color: #555;'>It looks like you're not registered yet. Join us to gain access to exclusive content and features!</p>
            <button style='background-color: #323131; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; transition: background-color 0.3s;'>
                <a href='Register.html' style='color: white; text-decoration: none;'>Register Now</a>
            </button>
          </div>";
}
echo"<hr>";
echo "<h3 style='color: #333;'>Upcoming Events:</h3>";
echo "<ul style='list-style-type: none; padding: 0;'>";

$events = [
    "Business Networking Meetup: Connect with industry leaders and professionals to explore new business opportunities and collaborations.",
    "Annual Sports Day: Join us for a day filled with sports, games, and community spirit. Participate in friendly competitions and enjoy family-friendly activities.",
    "Tech Conference 2024: Dive into the latest technology trends, innovations, and insights from top experts in the field. Workshops and keynotes will inspire you to harness technology for your business.",
    "Charity Gala: Attend an evening of elegance and philanthropy, supporting local charities. Enjoy a silent auction, dinner, and live entertainment while making a difference in the community.",
    "Health and Wellness Expo: Explore the latest in health and wellness at our expo featuring expert speakers, fitness demonstrations, and resources for a healthier lifestyle.",
    "Art and Culture Festival: Celebrate the arts with local artists, musicians, and performers. Experience workshops, live performances, and exhibits showcasing creativity from the community."
];

foreach ($events as $event)
{
    echo "<li style='margin-bottom: 10px; color: #333;'>• $event</li>";
}

echo "</ul>";
?>
