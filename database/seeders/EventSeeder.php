<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::insert([
            [
                'title' => 'Laravel Conference',
                'description' => 'Gathering for developers.',
                'imageurl' => 'storage/events/event1.jpg',
                'date' => Carbon::create('2025', '08', '01', '10', '00'),
            ],
            [
                'title' => 'Azure Cloud Summit',
                'description' => 'Gathering for cloud computing seminar.',
                'imageurl' => 'storage/events/event2.jpg',
                'date' => Carbon::create('2025', '08', '01', '13', '00'),
            ],
            [
                'title' => 'Web Dev Bootcamp',
                'description' => 'Developers develop development skills.',
                'imageurl' => 'storage/events/event3.jpg',
                'date' => Carbon::create('2025', '08', '02', '7', '00'),
            ],
            [
                'title' => 'AI and Machine Learning Expo',
                'description' => 'See different and innovative AI and Machine Learning by students.',
                'imageurl' => 'storage/events/event4.jpg',
                'date' => Carbon::create('2025', '08', '02', '13', '00'),
            ],
            [
                'title' => 'Cybersecurity Forum',
                'description' => 'Get updated with the modern cybersecurity issues and how to prevent them from plenty of cybersecurity devs.',
                'imageurl' => 'storage/events/event5.jpg',
                'date' => Carbon::create('2025', '08', '03', '9', '30'),
            ],
            [
                'title' => 'Startup Pitch Night',
                'description' => 'Watch developers as they present their problem-solving projects.',
                'imageurl' => 'storage/events/event6.jpg',
                'date' => Carbon::create('2025', '08', '03', '20', '00'),
            ],
            [
                'title' => 'Mobile App Hackaton',
                'description' => 'Showcase your skills in mobile development and compete with others.',
                'imageurl' => 'storage/events/event7.jpg',
                'date' => Carbon::create('2025', '08', '04', '10', '00'),
            ],
            [
                'title' => 'E-commerce summit',
                'description' => 'Join the seminar in e-commerce to learn more about sales trends and business.',
                'imageurl' => 'storage/events/event8.jpg',
                'date' => Carbon::create('2025', '08', '04', '14', '30'),
            ],
            [
                'title' => 'Frontend Dev Conference',
                'description' => 'Learn more about UI/UX and building modern frontends.',
                'imageurl' => 'storage/events/event9.jpg',
                'date' => Carbon::create('2025', '08', '04', '14', '00'),
            ],
            [
                'title' => 'PHP Developers Meetup',
                'description' => 'Join us and converse with PHP developers.',
                'imageurl' => 'storage/events/event10.jpg',
                'date' => Carbon::create('2025', '08', '05', '10', '00'),
            ],
            [
                'title' => 'Tech Career Fare',
                'description' => 'Seek opportunity to find a job here.',
                'imageurl' => 'storage/events/event11.jpg',
                'date' => Carbon::create('2025', '08', '05', '10', '00'),
            ],
            [
                'title' => 'Gaming Expo',
                'description' => 'Come and join us see the video games developed by our students.',
                'imageurl' => 'storage/events/event12.jpg',
                'date' => Carbon::create('2025', '08', '05', '15', '00'),
            ],
            [
                'title' => 'VR Conference',
                'description' => 'Learn more about VR here!',
                'imageurl' => 'storage/events/event13.jpg',
                'date' => Carbon::create('2025', '08', '06', '10', '00'),
            ],
            [
                'title' => 'Women in Tech Summit',
                'description' => 'Empowering girl power in tech industry.',
                'imageurl' => 'storage/events/event14.jpg',
                'date' => Carbon::create('2025', '08', '06', '14', '00'),
            ],
            [
                'title' => 'FinTech Conference',
                'description' => 'First event description.',
                'imageurl' => 'storage/events/event15.jpg',
                'date' => Carbon::create('2025', '08', '06', '14', '30'),
            ],
            [
                'title' => 'Data Science Workshop',
                'description' => 'Expound your learning in modern data science.',
                'imageurl' => 'storage/events/event16.jpg',
                'date' => Carbon::create('2025', '08', '07', '10', '00'),
            ],
            [
                'title' => 'Robotics Exhibition',
                'description' => 'Come and see the advancement of technology in robotics.',
                'imageurl' => 'storage/events/event17.jpg',
                'date' => Carbon::create('2025', '08', '07', '14', '00'),
            ],
            [
                'title' => 'Green Energy Forum',
                'description' => 'Sustainable energy discussion.',
                'imageurl' => 'storage/events/event18.jpg',
                'date' => Carbon::create('2025', '08', '08', '14', '30'),
            ],
            [
                'title' => 'Digital Marketing Workshop',
                'description' => 'Learn effective marketing strategy online.',
                'imageurl' => 'storage/events/event19.jpg',
                'date' => Carbon::create('2025', '08', '08', '15', '00'),
            ],
            [
                'title' => 'Smart City Innovations',
                'description' => 'Come and learn IOT reshaping the city.',
                'imageurl' => 'storage/events/event20.jpg',
                'date' => Carbon::create('2025', '08', '08', '16', '00'),
            ],
        ]);
    }
}
