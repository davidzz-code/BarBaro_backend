<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Service;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $services = [
            'Haircut' => [
                'A classic haircut to freshen up your look.',
                'Our skilled barbers will give you the perfect cut.',
                'Transform your style with a professional haircut.',
            ],
            'Classic Shave' => [
                'Experience the smoothest shave with our classic service.',
                'Relax as our barbers provide a traditional shave.',
                'Indulge in the luxury of a classic shave.',
            ],
            'Beard Trim' => [
                'Keep your beard looking sharp with a professional trim.',
                'Let our experts sculpt your beard to perfection.',
                'Maintain your style with a precise beard trim.',
            ],
            'Hot Towel Treatment' => [
                'Revitalize your skin with our soothing hot towel treatment.',
                'Experience ultimate relaxation with our hot towel service.',
                'Our hot towel treatment will leave you feeling rejuvenated.',
            ],
            'Head Shave' => [
                'Get a clean and refreshing head shave with our expert barbers.',
                'Say goodbye to unwanted hair with our professional head shave.',
                'Feel the smoothness of a professional head shave.',
            ],
            'Mustache Grooming' => [
                'Let us groom your mustache to perfection.',
                'Keep your mustache looking sharp with our grooming service.',
                'Enhance your style with our expert mustache grooming.',
            ],
            'Facial Massage' => [
                'Relax and rejuvenate with a soothing facial massage.',
                'Treat yourself to a calming facial massage.',
                'Our facial massage will leave your skin glowing and refreshed.',
            ],
            'Scalp Treatment' => [
                'Nourish your scalp with our revitalizing treatment.',
                'Say goodbye to dry scalp with our hydrating treatment.',
                'Our scalp treatment will leave your hair feeling healthy and vibrant.',
            ],
        ];

        $serviceName = $this->faker->randomElement(array_keys($services));
        $serviceDescription = $this->faker->randomElement($services[$serviceName]);

        return [
            'name' => $serviceName,
            'description' => $serviceDescription,
            'approximate_duration_min' => $this->faker->numberBetween(0, 120),
            'price' => $this->faker->randomFloat(2, 0, 200),
        ];
    }
}
