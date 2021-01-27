<?php

namespace App\Form;

use App\Entity\Order;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('deliveryAt')
            ->add('status',  ChoiceType::class, [
                'choices'  => [
                    'prepared to delivery...' =>'prepared to delivery...' ,
                    'Payed' =>  'Payed',
                    'Canceled' => 'Canceled',
                ],
            ])
//            ->add('createdAt')
//            ->add('updatedAt')
            ->add('customer')
            ->add('products')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
