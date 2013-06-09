<?php

namespace Newwly\UserBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

class StringToLowercaseTransformer implements DataTransformerInterface
{
  
    /**
     * Transforms an string (issue) to a lowercase  (number).
     *
     * @param  string $value
     * @return string
     */
    public function transform($value)
    {
        if ($value === "") {
            return "";
        }
   
        return strtolower($value);
    }

    /**
     * simply returns the given string.
     *
     * @param  string $value
     * @return string
     *
     */
    public function reverseTransform($value)
    {
         if ($value === "") {
            return "";
        }

        return strtolower($value);
    }
}