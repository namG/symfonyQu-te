<?php
namespace WCS\CoavBundle\Form;

//generated code
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use WCS\CoavBundle\Entity\User;

class ReviewType extends AbstractType {

    /**
     * {@inheritdoc} Including all fields from Review entity.
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    { //method buildform taking 1st object $builder of the type FBI(containing its own methods
        //an array containing its tasks and its options to apply
        //it is HERE that we retrieve the inputs to be persisted in BDD
        $builder
            ->add('text', TextareaType::class, array(
                'attr'=> array('maxlength'=> 250,
                    'label'=> 'Description')))
            ->add('publicationDate')
            ->add('note',IntegerType::class, array('attr'=> array('min'=> 0, 'max' => 5, 'lable' => 'Note')))
            ->add('userRated', EntityType::class, array(
            'class' => User::class,
                        'query_builder' => function (EntityRepository $er) {
                            return $er->createQueryBuilder('u')
                                ->orderBy('u.lastName', 'ASC');
            },
           'choice_label' => 'phoneNumber'))
            ->add('reviewAuthor')
            ->add('agreeTerms', CheckboxType::class, array(
                'mapped' => false
            ));
    }

    /**
     * {@inheritdoc} Targeting Review entity
     */
    public function configureOptions(OptionsResolver $resolver)
    {//during the creation of the form, each input added will be linked with the correspondant field in entity
        $resolver->setDefaults(array(
            'data_class' => 'WCS\CoavBundle\Entity\Review'
        ));
    }

    /**
     * {@inheritdoc} getName() is now deprecated
     */
    public function getBlockPrefix()
    {
        return 'wcs_coavbundle_review';
    }

}